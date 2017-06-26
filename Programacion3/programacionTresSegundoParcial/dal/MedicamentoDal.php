<?php
    require_once dirname(__FILE__)."/../libs/DalTools.php";

    class MedicamentoDal{

        public static function findAll($active){
            $query = "select id,nombre,laboratorio,precio from medicamento where deleted = false";

//            if ($active !== NULL){
                    if($active)
                    {
                        $query.=" order by laboratorio";
                    }
  //              }

            $medicamentos = DalTools::query($query,null);
            return $medicamentos;
        }

        public static function create($nombre, $laboratorio, $precio){
            $query = "insert into medicamento (nombre, laboratorio, precio) values (?,?,?)";
            $params = [$nombre, $laboratorio, $precio];
            $createdMedicamentoId = DalTools::query($query,$params);
            return MedicamentoDal::get($createdMedicamentoId);
        }

        public static function get($id){
            $query = "select id,nombre,laboratorio,precio from medicamento where id = ? and deleted = false";
            $params = [$id];
            $medicamento = DalTools::queryForOne($query,$params);
            return $medicamento;
        }

        public static function delete($id){
            $query = "update medicamento set deleted = true where id = ?";
            $params = [$id];
            DalTools::query($query,$params);
            return;
        }

    }
?>