<?php

/** ******************************************************************************* *
  *                    !ATENCION!                                                   *
  *                                                                                 *
  * Este codigo es generado automaticamente. Si lo modificas tus cambios seran      *
  * reemplazados la proxima vez que se autogenere el codigo.                        *
  *                                                                                 *
  * ******************************************************************************* */

/** Value Object file for table Entity_Feedback_Features.
  * 
  * VO does not have any behaviour.
  * @access public
  * 
  */

class EntityFeedbackFeatures extends VO
{
	/**
	  * Constructor de EntityFeedbackFeatures
	  * 
	  * Para construir un objeto de tipo EntityFeedbackFeatures debera llamarse a el constructor 
	  * sin parametros. Es posible, construir un objeto pasando como parametro un arreglo asociativo 
	  * cuyos campos son iguales a las variables que constituyen a este objeto.
	  */
	function __construct($data = NULL)
	{
		if (isset($data))
		{
			if (is_string($data))
				$data = self::object_to_array(json_decode($data));


			if (isset($data['feature_id'])) {
				$this->feature_id = $data['feature_id'];
			}
			if (isset($data['entity_type'])) {
				$this->entity_type = $data['entity_type'];
			}
			if (isset($data['name'])) {
				$this->name = $data['name'];
			}
		}
	}

	/**
	  * Obtener una representacion en String
	  * 
	  * Este metodo permite tratar a un objeto EntityFeedbackFeatures en forma de cadena.
	  * La representacion de este objeto en cadena es la forma JSON (JavaScript Object Notation) para este objeto.
	  * @return String 
	  */
	public function __toString( )
	{ 
		$vec = array( 
			"feature_id" => $this->feature_id,
			"entity_type" => $this->entity_type,
			"name" => $this->name
		); 
	return json_encode($vec); 
	}

	/**
	 * Converts date fields to timestamps
	 **/
	public function toUnixTime(array $fields = array()) {
		if (count($fields) > 0)
			parent::toUnixTime($fields);
		else
			parent::toUnixTime(array());
	}

	/**
	  *  [Campo no documentado]
	  * Llave Primaria
	  * Auto Incremento
	  * @access public
	  * @var int(11)
	  */
	public $feature_id;

	/**
	  *  [Campo no documentado]
	  * @access public
	  * @var ENUM
	  */
	public $entity_type;

	/**
	  *  [Campo no documentado]
	  * @access public
	  * @var varchar(45)
	  */
	public $name;
}
