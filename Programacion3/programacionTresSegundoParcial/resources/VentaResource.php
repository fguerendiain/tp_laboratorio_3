<?php
/*****************************************/
/*                  VENTA                */
/*****************************************/

    require_once dirname(__FILE__)."/../dal/VentaDal.php";

    class VentaResource{

        public static function find($req, $resp){
            $ventas = VentaDal::findAll();
            return $resp->getBody()->write(json_encode($ventas));
        }

        public static function create($req, $resp){
            $data = $req->getParsedBody();
            $idmedicamento = $data['idmedicamento'];
            $idusuario = $data['idusuario'];
            $cliente = $data['cliente'];
            $foto = $data['foto'];
            $createdVenta = VentaDal::create($idmedicamento, $idusuario, $cliente, $foto);
            return $resp->getBody()->write(json_encode($createdVenta));
        }

        public static function update($req, $resp){
            $id = $req->getAttribute("id");
            $venta = VentaDal::get($id);
            if ($venta==NULL){
                return $resp->withStatus(404);
            }else{
                $data = $req->getParsedBody();
                $idmedicamento = $data['idmedicamento'];
                $idusuario = $data['idusuario'];
                $cliente = $data['cliente'];
                $foto = $data['foto'];
                $updatedVenta = VentaDal::update($id, $idmedicamento, $idusuario, $cliente, $foto);
                return $resp->getBody()->write(json_encode($updatedVenta));
            }
        }

        public static function get($req, $resp){
            $id = $req->getAttribute("id");
            $venta = VentaDal::get($id);
            if ($venta==NULL){
                return $resp->withStatus(404);
            }else{
                return $resp->getBody()->write(json_encode($venta));
            }
        }
    }
?>