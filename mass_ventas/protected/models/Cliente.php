<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property string $id_cliente
 * @property integer $cedula_cliente
 * @property string $nombre_cliente
 * @property string $apellido_cliente
 * @property string $telefono_celular_cliente
 * @property string $telefono_casa_cliente
 * @property string $telefono_oficina_cliente
 * @property string $correo_cliente
 * @property string $tarjeta_cliente
 * @property string $fecha_caducidad_tc_cliente
 * @property integer $codigo_seguridad_cliente
 * @property string $fecha_venta_cliente
 * @property string $asesor_cliente
 * @property string $ciudad_cliente
 * @property string $provincia_cliente
 * @property string $direcion_cliente
 * @property string $banco_cliente
 * @property string $franquicia_cliente
 * @property integer $status_cliente
 * @property string $super_realiza_pos
 * @property integer $autorizacion_cliente
 * @property string $trans_cliente
 * @property string $plazo_cliente
 * @property string $fecha_autorizacion_cliente
 * @property integer $recap_cliente
 * @property string $voucher_cliente
 * @property integer $centro_auto_cliente
 * @property double $monto_cliente
 * @property integer $codigo_cliente
 * @property string $courier_cliente
 * @property string $fecha_envio_cliente
 * @property string $fecha_entrega_cliente
 * @property integer $carta_cliente
 * @property integer $copia_ci_cliente
 * @property string $fecha_pago_asesor_cliente
 * @property double $pago_banco_cliente
 * @property string $obsequio_cliente
 * @property double $pago_curier_cliente
 * @property string $obcervacion_asesor_cliente
 * @property string $obcervacion_encargado_cliente
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_cliente, codigo_seguridad_cliente, status_cliente, autorizacion_cliente, recap_cliente, centro_auto_cliente, codigo_cliente, carta_cliente, copia_ci_cliente', 'numerical', 'integerOnly'=>true),
			array('monto_cliente, pago_banco_cliente, pago_curier_cliente', 'numerical'),
			array('nombre_cliente, apellido_cliente, correo_cliente, asesor_cliente, ciudad_cliente, banco_cliente, franquicia_cliente, trans_cliente, plazo_cliente, courier_cliente', 'length', 'max'=>100),
			array('telefono_celular_cliente, telefono_casa_cliente, telefono_oficina_cliente, voucher_cliente', 'length', 'max'=>15),
			array('tarjeta_cliente', 'length', 'max'=>19),
			array('fecha_caducidad_tc_cliente', 'length', 'max'=>5),
			array('fecha_venta_cliente, provincia_cliente, direcion_cliente, super_realiza_pos, fecha_autorizacion_cliente, fecha_envio_cliente, fecha_entrega_cliente, fecha_pago_asesor_cliente, obcervacion_asesor_cliente, obcervacion_encargado_cliente', 'length', 'max'=>50),
			array('obsequio_cliente', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cliente, cedula_cliente, nombre_cliente, apellido_cliente, telefono_celular_cliente, telefono_casa_cliente, telefono_oficina_cliente, correo_cliente, tarjeta_cliente, fecha_caducidad_tc_cliente, codigo_seguridad_cliente, fecha_venta_cliente, asesor_cliente, ciudad_cliente, provincia_cliente, direcion_cliente, banco_cliente, franquicia_cliente, status_cliente, super_realiza_pos, autorizacion_cliente, trans_cliente, plazo_cliente, fecha_autorizacion_cliente, recap_cliente, voucher_cliente, centro_auto_cliente, monto_cliente, codigo_cliente, courier_cliente, fecha_envio_cliente, fecha_entrega_cliente, carta_cliente, copia_ci_cliente, fecha_pago_asesor_cliente, pago_banco_cliente, obsequio_cliente, pago_curier_cliente, obcervacion_asesor_cliente, obcervacion_encargado_cliente', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cliente' => 'Id Cliente',
			'cedula_cliente' => 'Cedula Cliente',
			'nombre_cliente' => 'Nombre Cliente',
			'apellido_cliente' => 'Apellido Cliente',
			'telefono_celular_cliente' => 'Telefono Celular Cliente',
			'telefono_casa_cliente' => 'Telefono Casa Cliente',
			'telefono_oficina_cliente' => 'Telefono Oficina Cliente',
			'correo_cliente' => 'Correo Cliente',
			'tarjeta_cliente' => 'Tarjeta Cliente',
			'fecha_caducidad_tc_cliente' => 'Fecha Caducidad Tc Cliente',
			'codigo_seguridad_cliente' => 'Codigo Seguridad Cliente',
			'fecha_venta_cliente' => 'Fecha Venta Cliente',
			'asesor_cliente' => 'Asesor Cliente',
			'ciudad_cliente' => 'Ciudad Cliente',
			'provincia_cliente' => 'Provincia Cliente',
			'direcion_cliente' => 'Direcion Cliente',
			'banco_cliente' => 'Banco Cliente',
			'franquicia_cliente' => 'Franquicia Cliente',
			'status_cliente' => 'Status Cliente',
			'super_realiza_pos' => 'Super Realiza Pos',
			'autorizacion_cliente' => 'Autorizacion Cliente',
			'trans_cliente' => 'Trans Cliente',
			'plazo_cliente' => 'Plazo Cliente',
			'fecha_autorizacion_cliente' => 'Fecha Autorizacion Cliente',
			'recap_cliente' => 'Recap Cliente',
			'voucher_cliente' => 'Voucher Cliente',
			'centro_auto_cliente' => 'Centro Auto Cliente',
			'monto_cliente' => 'Monto Cliente',
			'codigo_cliente' => 'Codigo Cliente',
			'courier_cliente' => 'Courier Cliente',
			'fecha_envio_cliente' => 'Fecha Envio Cliente',
			'fecha_entrega_cliente' => 'Fecha Entrega Cliente',
			'carta_cliente' => 'Carta Cliente',
			'copia_ci_cliente' => 'Copia Ci Cliente',
			'fecha_pago_asesor_cliente' => 'Fecha Pago Asesor Cliente',
			'pago_banco_cliente' => 'Pago Banco Cliente',
			'obsequio_cliente' => 'Obsequio Cliente',
			'pago_curier_cliente' => 'Pago Curier Cliente',
			'obcervacion_asesor_cliente' => 'Observacion',
			'obcervacion_encargado_cliente' => 'Observacion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition = "status_cliente=0";

		$criteria->compare('id_cliente',$this->id_cliente,true);
		$criteria->compare('cedula_cliente',$this->cedula_cliente);
		$criteria->compare('nombre_cliente',$this->nombre_cliente,true);
		$criteria->compare('apellido_cliente',$this->apellido_cliente,true);
		$criteria->compare('telefono_celular_cliente',$this->telefono_celular_cliente,true);
		$criteria->compare('telefono_casa_cliente',$this->telefono_casa_cliente,true);
		$criteria->compare('telefono_oficina_cliente',$this->telefono_oficina_cliente,true);
		$criteria->compare('correo_cliente',$this->correo_cliente,true);
		$criteria->compare('tarjeta_cliente',$this->tarjeta_cliente,true);
		$criteria->compare('fecha_caducidad_tc_cliente',$this->fecha_caducidad_tc_cliente,true);
		$criteria->compare('codigo_seguridad_cliente',$this->codigo_seguridad_cliente);
		$criteria->compare('fecha_venta_cliente',$this->fecha_venta_cliente,true);
		$criteria->compare('asesor_cliente',$this->asesor_cliente,true);
		$criteria->compare('ciudad_cliente',$this->ciudad_cliente,true);
		$criteria->compare('provincia_cliente',$this->provincia_cliente,true);
		$criteria->compare('direcion_cliente',$this->direcion_cliente,true);
		$criteria->compare('banco_cliente',$this->banco_cliente,true);
		$criteria->compare('franquicia_cliente',$this->franquicia_cliente,true);
		$criteria->compare('status_cliente',$this->status_cliente);
		$criteria->compare('super_realiza_pos',$this->super_realiza_pos,true);
		$criteria->compare('autorizacion_cliente',$this->autorizacion_cliente);
		$criteria->compare('trans_cliente',$this->trans_cliente,true);
		$criteria->compare('plazo_cliente',$this->plazo_cliente,true);
		$criteria->compare('fecha_autorizacion_cliente',$this->fecha_autorizacion_cliente,true);
		$criteria->compare('recap_cliente',$this->recap_cliente);
		$criteria->compare('voucher_cliente',$this->voucher_cliente,true);
		$criteria->compare('centro_auto_cliente',$this->centro_auto_cliente);
		$criteria->compare('monto_cliente',$this->monto_cliente);
		$criteria->compare('codigo_cliente',$this->codigo_cliente);
		$criteria->compare('courier_cliente',$this->courier_cliente,true);
		$criteria->compare('fecha_envio_cliente',$this->fecha_envio_cliente,true);
		$criteria->compare('fecha_entrega_cliente',$this->fecha_entrega_cliente,true);
		$criteria->compare('carta_cliente',$this->carta_cliente);
		$criteria->compare('copia_ci_cliente',$this->copia_ci_cliente);
		$criteria->compare('fecha_pago_asesor_cliente',$this->fecha_pago_asesor_cliente,true);
		$criteria->compare('pago_banco_cliente',$this->pago_banco_cliente);
		$criteria->compare('obsequio_cliente',$this->obsequio_cliente,true);
		$criteria->compare('pago_curier_cliente',$this->pago_curier_cliente);
		$criteria->compare('obcervacion_asesor_cliente',$this->obcervacion_asesor_cliente,true);
		$criteria->compare('obcervacion_encargado_cliente',$this->obcervacion_encargado_cliente,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

public function entrega()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition = "status_cliente=7";

		$criteria->compare('id_cliente',$this->id_cliente,true);
		$criteria->compare('cedula_cliente',$this->cedula_cliente);
		$criteria->compare('nombre_cliente',$this->nombre_cliente,true);
		$criteria->compare('apellido_cliente',$this->apellido_cliente,true);
		$criteria->compare('telefono_celular_cliente',$this->telefono_celular_cliente,true);
		$criteria->compare('telefono_casa_cliente',$this->telefono_casa_cliente,true);
		$criteria->compare('telefono_oficina_cliente',$this->telefono_oficina_cliente,true);
		$criteria->compare('correo_cliente',$this->correo_cliente,true);
		$criteria->compare('tarjeta_cliente',$this->tarjeta_cliente,true);
		$criteria->compare('fecha_caducidad_tc_cliente',$this->fecha_caducidad_tc_cliente,true);
		$criteria->compare('codigo_seguridad_cliente',$this->codigo_seguridad_cliente);
		$criteria->compare('fecha_venta_cliente',$this->fecha_venta_cliente,true);
		$criteria->compare('asesor_cliente',$this->asesor_cliente,true);
		$criteria->compare('ciudad_cliente',$this->ciudad_cliente,true);
		$criteria->compare('provincia_cliente',$this->provincia_cliente,true);
		$criteria->compare('direcion_cliente',$this->direcion_cliente,true);
		$criteria->compare('banco_cliente',$this->banco_cliente,true);
		$criteria->compare('franquicia_cliente',$this->franquicia_cliente,true);
		$criteria->compare('status_cliente',$this->status_cliente);
		$criteria->compare('super_realiza_pos',$this->super_realiza_pos,true);
		$criteria->compare('autorizacion_cliente',$this->autorizacion_cliente);
		$criteria->compare('trans_cliente',$this->trans_cliente,true);
		$criteria->compare('plazo_cliente',$this->plazo_cliente,true);
		$criteria->compare('fecha_autorizacion_cliente',$this->fecha_autorizacion_cliente,true);
		$criteria->compare('recap_cliente',$this->recap_cliente);
		$criteria->compare('voucher_cliente',$this->voucher_cliente,true);
		$criteria->compare('centro_auto_cliente',$this->centro_auto_cliente);
		$criteria->compare('monto_cliente',$this->monto_cliente);
		$criteria->compare('codigo_cliente',$this->codigo_cliente);
		$criteria->compare('courier_cliente',$this->courier_cliente,true);
		$criteria->compare('fecha_envio_cliente',$this->fecha_envio_cliente,true);
		$criteria->compare('fecha_entrega_cliente',$this->fecha_entrega_cliente,true);
		$criteria->compare('carta_cliente',$this->carta_cliente);
		$criteria->compare('copia_ci_cliente',$this->copia_ci_cliente);
		$criteria->compare('fecha_pago_asesor_cliente',$this->fecha_pago_asesor_cliente,true);
		$criteria->compare('pago_banco_cliente',$this->pago_banco_cliente);
		$criteria->compare('obsequio_cliente',$this->obsequio_cliente,true);
		$criteria->compare('pago_curier_cliente',$this->pago_curier_cliente);
		$criteria->compare('obcervacion_asesor_cliente',$this->obcervacion_asesor_cliente,true);
		$criteria->compare('obcervacion_encargado_cliente',$this->obcervacion_encargado_cliente,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}



public function rechazada()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition = "status_cliente=5 or status_cliente=10 or status_cliente=11 or status_cliente=12";

		$criteria->compare('id_cliente',$this->id_cliente,true);
		$criteria->compare('cedula_cliente',$this->cedula_cliente);
		$criteria->compare('nombre_cliente',$this->nombre_cliente,true);
		$criteria->compare('apellido_cliente',$this->apellido_cliente,true);
		$criteria->compare('telefono_celular_cliente',$this->telefono_celular_cliente,true);
		$criteria->compare('telefono_casa_cliente',$this->telefono_casa_cliente,true);
		$criteria->compare('telefono_oficina_cliente',$this->telefono_oficina_cliente,true);
		$criteria->compare('correo_cliente',$this->correo_cliente,true);
		$criteria->compare('tarjeta_cliente',$this->tarjeta_cliente,true);
		$criteria->compare('fecha_caducidad_tc_cliente',$this->fecha_caducidad_tc_cliente,true);
		$criteria->compare('codigo_seguridad_cliente',$this->codigo_seguridad_cliente);
		$criteria->compare('fecha_venta_cliente',$this->fecha_venta_cliente,true);
		$criteria->compare('asesor_cliente',$this->asesor_cliente,true);
		$criteria->compare('ciudad_cliente',$this->ciudad_cliente,true);
		$criteria->compare('provincia_cliente',$this->provincia_cliente,true);
		$criteria->compare('direcion_cliente',$this->direcion_cliente,true);
		$criteria->compare('banco_cliente',$this->banco_cliente,true);
		$criteria->compare('franquicia_cliente',$this->franquicia_cliente,true);
		$criteria->compare('status_cliente',$this->status_cliente);
		$criteria->compare('super_realiza_pos',$this->super_realiza_pos,true);
		$criteria->compare('autorizacion_cliente',$this->autorizacion_cliente);
		$criteria->compare('trans_cliente',$this->trans_cliente,true);
		$criteria->compare('plazo_cliente',$this->plazo_cliente,true);
		$criteria->compare('fecha_autorizacion_cliente',$this->fecha_autorizacion_cliente,true);
		$criteria->compare('recap_cliente',$this->recap_cliente);
		$criteria->compare('voucher_cliente',$this->voucher_cliente,true);
		$criteria->compare('centro_auto_cliente',$this->centro_auto_cliente);
		$criteria->compare('monto_cliente',$this->monto_cliente);
		$criteria->compare('codigo_cliente',$this->codigo_cliente);
		$criteria->compare('courier_cliente',$this->courier_cliente,true);
		$criteria->compare('fecha_envio_cliente',$this->fecha_envio_cliente,true);
		$criteria->compare('fecha_entrega_cliente',$this->fecha_entrega_cliente,true);
		$criteria->compare('carta_cliente',$this->carta_cliente);
		$criteria->compare('copia_ci_cliente',$this->copia_ci_cliente);
		$criteria->compare('fecha_pago_asesor_cliente',$this->fecha_pago_asesor_cliente,true);
		$criteria->compare('pago_banco_cliente',$this->pago_banco_cliente);
		$criteria->compare('obsequio_cliente',$this->obsequio_cliente,true);
		$criteria->compare('pago_curier_cliente',$this->pago_curier_cliente);
		$criteria->compare('obcervacion_asesor_cliente',$this->obcervacion_asesor_cliente,true);
		$criteria->compare('obcervacion_encargado_cliente',$this->obcervacion_encargado_cliente,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}




public function guardada()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition = "status_cliente=14";

		$criteria->compare('id_cliente',$this->id_cliente,true);
		$criteria->compare('cedula_cliente',$this->cedula_cliente);
		$criteria->compare('nombre_cliente',$this->nombre_cliente,true);
		$criteria->compare('apellido_cliente',$this->apellido_cliente,true);
		$criteria->compare('telefono_celular_cliente',$this->telefono_celular_cliente,true);
		$criteria->compare('telefono_casa_cliente',$this->telefono_casa_cliente,true);
		$criteria->compare('telefono_oficina_cliente',$this->telefono_oficina_cliente,true);
		$criteria->compare('correo_cliente',$this->correo_cliente,true);
		$criteria->compare('tarjeta_cliente',$this->tarjeta_cliente,true);
		$criteria->compare('fecha_caducidad_tc_cliente',$this->fecha_caducidad_tc_cliente,true);
		$criteria->compare('codigo_seguridad_cliente',$this->codigo_seguridad_cliente);
		$criteria->compare('fecha_venta_cliente',$this->fecha_venta_cliente,true);
		$criteria->compare('asesor_cliente',$this->asesor_cliente,true);
		$criteria->compare('ciudad_cliente',$this->ciudad_cliente,true);
		$criteria->compare('provincia_cliente',$this->provincia_cliente,true);
		$criteria->compare('direcion_cliente',$this->direcion_cliente,true);
		$criteria->compare('banco_cliente',$this->banco_cliente,true);
		$criteria->compare('franquicia_cliente',$this->franquicia_cliente,true);
		$criteria->compare('status_cliente',$this->status_cliente);
		$criteria->compare('super_realiza_pos',$this->super_realiza_pos,true);
		$criteria->compare('autorizacion_cliente',$this->autorizacion_cliente);
		$criteria->compare('trans_cliente',$this->trans_cliente,true);
		$criteria->compare('plazo_cliente',$this->plazo_cliente,true);
		$criteria->compare('fecha_autorizacion_cliente',$this->fecha_autorizacion_cliente,true);
		$criteria->compare('recap_cliente',$this->recap_cliente);
		$criteria->compare('voucher_cliente',$this->voucher_cliente,true);
		$criteria->compare('centro_auto_cliente',$this->centro_auto_cliente);
		$criteria->compare('monto_cliente',$this->monto_cliente);
		$criteria->compare('codigo_cliente',$this->codigo_cliente);
		$criteria->compare('courier_cliente',$this->courier_cliente,true);
		$criteria->compare('fecha_envio_cliente',$this->fecha_envio_cliente,true);
		$criteria->compare('fecha_entrega_cliente',$this->fecha_entrega_cliente,true);
		$criteria->compare('carta_cliente',$this->carta_cliente);
		$criteria->compare('copia_ci_cliente',$this->copia_ci_cliente);
		$criteria->compare('fecha_pago_asesor_cliente',$this->fecha_pago_asesor_cliente,true);
		$criteria->compare('pago_banco_cliente',$this->pago_banco_cliente);
		$criteria->compare('obsequio_cliente',$this->obsequio_cliente,true);
		$criteria->compare('pago_curier_cliente',$this->pago_curier_cliente);
		$criteria->compare('obcervacion_asesor_cliente',$this->obcervacion_asesor_cliente,true);
		$criteria->compare('obcervacion_encargado_cliente',$this->obcervacion_encargado_cliente,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}



	


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
