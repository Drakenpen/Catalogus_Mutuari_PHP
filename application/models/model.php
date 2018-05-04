<?php
	//Catalog Model
    public function loadEvents()
    {
        $sql = "SELECT * FROM catalog ORDER BY id ASC";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }