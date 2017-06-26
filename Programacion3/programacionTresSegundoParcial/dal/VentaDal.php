<?php
    require_once dirname(__FILE__)."/../libs/DalTools.php";

    class VentaDal{

        public static function findAll(){
            $query = "select id, idmedicamento, idusuario, cliente, foto from venta";
            $ventas = DalTools::query($query,null);
            return $ventas;
        }

        public static function create($idmedicamento, $idusuario, $cliente, $foto){
            $query = "insert into venta (idmedicamento, idusuario, cliente, foto) values (?,?,?,?)";
            $params = [$idmedicamento, $idusuario, $cliente, $foto];
            $createdVentaId = DalTools::query($query,$params);
            return VentaDal::get($createdVentaId);
        }

        public static function get($id){
            $query = "select id, idmedicamento, idusuario, cliente, foto from venta where id = ?";
            $params = [$id];
            $place = DalTools::queryForOne($query,$params);
            return $place;
        }

        public static function update($id, $idmedicamento, $idusuario, $cliente, $foto){
            $query = "update venta set idmedicamento = ?, idusuario = ?, cliente = ?, foto = ? where id = ?";
            $params = [$idmedicamento, $idusuario, $cliente, $foto, $id];
            DalTools::query($query, $params);
            return VentaDal::get($id);
        }
    }
?>