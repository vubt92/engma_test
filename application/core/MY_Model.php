<?php
Class MY_Model extends CI_Model
{
    //Tên table
    var $table = '';
    //Key chính của table
    var $key = 'id';
    //
    var $order = '';

    var $select = '';
    function insert($data = array())
    {
        if($this->db->insert($this->table, $data))
        {
            return true;
        }else{
            return false;
        }
    }

    function check_exists($where = array())
    {
        $this->db->where($where);
        //query get data from table
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0)
        {
            return true;
        }else{
            return false;
        }
    }

    function get_list($input=array())
    {
        //Xử lý tất cả dữ liệu đầu vào
        $this->get_list_set_input($input);

        //thực hiện truy vấn dữ liệu
        $query = $this->db->get($this->table);

        //echo $this->db->last_query();
        return $query->result();

    }

    protected function get_list_set_input($input = array())
    {

        if ((isset($input['where'])) && $input['where'])
        {
            $this->db->where($input['where']);
        }

        //tim kiem like
        // $input['like'] = array('name' => 'abc');
        if ((isset($input['like'])) && $input['like'])
        {
            $this->db->like($input['like'][0], $input['like'][1]);
        }
        if (isset($input['order'][0]) && isset($input['order'][1]))
        {
            $this->db->order_by($input['order'][0], $input['order'][1]);
        }
        else
        {
            $order = ($this->order == '') ? array($this->table.'.'.$this->key, 'desc') : $this->order;
            $this->db->order_by($order[0], $order[1]);
        }
        if (isset($input['limit'][0]) && isset($input['limit'][1]))
        {
            $this->db->limit($input['limit'][0], $input['limit'][1]);
        }
    }

    function get_info($id, $field = "")
    {
        if (!$id){
            return true;
        }
        $where = array();
        $where[$this->key] = $id;
        return $this->get_info_rule($where, $field);
    }

    function  get_info_rule($where = array(), $field='')
    {
        if($field)
        {
            $this->db->select($field);
        }
        $this->db->where($where);
        $query = $this->db->get($this->table);
        if($query->num_rows())
        {
            return $query->row(); //return object
        }
        return false;
    }
}
?>
