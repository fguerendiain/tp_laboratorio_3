<?php
/*****************************************/
/*                  MEDICAMENTO                */
/*****************************************/

    require_once dirname(__FILE__)."/../dal/MedicamentoDal.php";

    class MedicamentoResource{

        public static function find($req, $resp){
            $orderByLaboratorio = $req->getQueryParams()['laboratorio'];

            $active = NULL;
            if ($orderByLaboratorio){
                $active = TRUE;
            }

            $medicamentos = MedicamentoDal::findAll($active);
            return $resp->getBody()->write(json_encode($medicamentos));
        }

        public static function create($req, $resp){
            $data = $req->getParsedBody();
            $nombre = $data['nombre'];
            $laboratorio = $data['laboratorio'];
            $precio = $data['precio'];
            $createdMedicamento = MedicamentoDal::create($nombre, $laboratorio, $precio);
            return $resp->getBody()->write(json_encode($createdMedicamento));
        }

        public static function get($req, $resp){
            $id = $req->getAttribute("id");
            $medicamento = MedicamentoDal::get($id);
            if ($medicamento==NULL){
                return $resp->withStatus(404);
            }else{
                return $resp->getBody()->write(json_encode($medicamento));
            }
        }

        public static function delete($req, $resp){
            $id = $req->getAttribute("id");
            $medicamento = MedicamentoDal::get($id);
            if ($medicamento==NULL){
                return $resp->withStatus(404);
            }else{
                MedicamentoDal::delete($id);
                return $resp->getBody()->write(json_encode("Se elimino el indice ".$id));
            }            
        }

    }
?>