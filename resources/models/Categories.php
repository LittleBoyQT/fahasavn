<?php
class resources_Models_Categories extends resources_libs_DbConnection {
    protected $tableName = "theloaisach";

    public function buildSelectBox() {
        $query = $this->buildQueryParams(["select"=>"matheloai, tentheloai"])->select();
        $result = [""=>"-- Chọn thể loại --"];
        foreach($query as $row) {
            $result[$row["matheloai"]] = $row["tentheloai"];
        }
        return $result; 
    }
}
