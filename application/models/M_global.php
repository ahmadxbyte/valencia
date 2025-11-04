<?php
class M_global extends CI_Model
{
    public function getData($table, $where)
    {
        return $this->db->get_where($table, $where)->row();
    }
    public function getDataResult($table, $where)
    {
        return $this->db->get_where($table, $where)->result();
    }

    public function getDataTop($table, $limit)
    {
        $this->db->limit($limit);
        return $this->db->get($table)->result();
    }
}
