<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {

    var $id;
    var $type;
    var $title;
    var $slug;
    var $content;
    var $image;
    var $is_active;
    var $is_featured;
    var $date_created;
    var $date_updated;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get($slug)
    {
        $query = $this->db->get_where('article', array('slug' => $slug));
        return $query->row();
    }
    
    function get_entries($type = CONTENT_ARTICLE, $id = null, $limit = null, $offset = null, $order_by = null, $active = 1)
    {
        if (!is_null($id)) :
            $where = array('id' => $id);
        else :
            $where = array('type' => $type);
            if ($active == 1)
                $this->db->where('is_active', 1);
        endif;

        if (!is_null($order_by))
            $this->db->order_by($order_by);

        $query = $this->db->get_where('article', $where, $limit, $offset);
        return $query;
    }
    
    function get_class_entries($limit = null, $offset = null, $order_by = null, $active = 1)
    {
        if (!is_null($order_by))
            $this->db->order_by($order_by);

        if ($active == 1)
            $this->db->where('article.is_active', 1);

        $query = $this->db->select('article.*, category.name')
                ->join('category', 'category.id = article.class_category_id')
                ->where(array('article.type' => CONTENT_CLASS, 'category.type' => CATEGORY_CLASS))
                ->get('article', $limit, $offset);
                
        return $query;
    }

    function get_count($type = CONTENT_ARTICLE, $active = 1)
    {
        if ($active == 1)
            $this->db->where('is_active', 1);

        $count = $this->db->where('type', $type)
                ->from('article')
                ->count_all_results();
        return $count;
    }

    function insert_entry($type = CONTENT_ARTICLE)
    {
        if ($this->input->post('is_featured') == 1)
            $this->clear_feature($type);

        $this->type         = $type;
        $this->title        = $this->input->post('title');
        $this->slug         = $this->input->post('slug');
        $this->content      = $this->input->post('content');
        $this->is_active    = $this->input->post('is_active');
        $this->is_featured  = $this->input->post('is_featured');
        $this->date_created = date('Y-m-d h:i:s');
        $this->date_updated = date('Y-m-d h:i:s');
        $this->db->insert('article', $this);
    }

    function remove_entry()
    {
        $this->id = $this->input->post('id');
        $this->db->delete('article', array('id' => $this->id));
    }

    function update_entry($type = CONTENT_ARTICLE)
    {
        if ($this->input->post('is_featured') == 1)
            $this->clear_feature($type);

        $this->type         = $type;
        $this->id           = $this->input->post('article_id');
        $this->title        = $this->input->post('title');
        $this->slug         = $this->input->post('slug');
        $this->content      = $this->input->post('content');
        $this->is_active    = $this->input->post('is_active');
        $this->is_featured  = $this->input->post('is_featured');
        $this->date_updated = date('Y-m-d h:i:s');
        $this->db->update('article', $this, array('id' => $this->id));
    }

    function clear_feature($type)
    {
        $this->db->update('article', array('is_featured' => 0), array('type' => $type));
    }

}