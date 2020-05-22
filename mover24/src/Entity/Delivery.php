<?php


namespace App\Entity;


class Delivery
{

    protected $name_v; // имя покупателя
    protected $surname; // фамилия (необязательный)
    protected $patronymic; // отчество (необязательный)
    protected $phone; // телефон покупателя в формате ^7[0-9]{10}$
    protected $from_addr; // адрес склада
    protected $from_lat; // широта склада (необязательный)
    protected $from_lon; // долгота склада (необязательный)
    protected $from_contact_name; // имя контактного лица на складе
    protected $from_contact_phone; // контактный телефон на складе
    protected $to_addr; // адрес доставки
    protected $to_lat; // широта доставки (необязательный)
    protected $to_lon; // долгота доставки (необязательный)
    protected $time_slot_begin; // начальный интервал доставки в формате 2017-03-23T11:46:15+0300
    protected $time_slot_end; // начальный интервал доставки в формате 2017-03-23T14:46:15+0300
    protected $products_n_code; // артикул товара
    protected $products_n_name; // название товара
    protected $products_n_count; // количество единиц товара
    protected $products_n_cost; // стоимость товара
    protected $products_n_weight; // вес в кг
    protected $products_n_volume; // объём м³
    protected $schema_v; // схема доставки (id)
    protected $legal_entity; // юр. лицо (id)
    protected $pay_method; // способ оплаты (cash, card, bank)
    protected $external_id; // внешний id заявки (необязательный)
    protected $requirements_tail_lift; // 1, если требуется гидроборт
    protected $requirements_loaders;

    /**
     * @return mixed
     */
    public function getNameV()
    {
        return $this->name_v;
    }

    /**
     * @param mixed $name_v
     */
    public function setNameV($name_v): void
    {
        $this->name_v = $name_v;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getPatronymic()
    {
        return $this->patronymic;
    }

    /**
     * @param mixed $patronymic
     */
    public function setPatronymic($patronymic): void
    {
        $this->patronymic = $patronymic;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getFromAddr()
    {
        return $this->from_addr;
    }

    /**
     * @param mixed $from_addr
     */
    public function setFromAddr($from_addr): void
    {
        $this->from_addr = $from_addr;
    }

    /**
     * @return mixed
     */
    public function getFromLat()
    {
        return $this->from_lat;
    }

    /**
     * @param mixed $from_lat
     */
    public function setFromLat($from_lat): void
    {
        $this->from_lat = $from_lat;
    }

    /**
     * @return mixed
     */
    public function getFromLon()
    {
        return $this->from_lon;
    }

    /**
     * @param mixed $from_lon
     */
    public function setFromLon($from_lon): void
    {
        $this->from_lon = $from_lon;
    }

    /**
     * @return mixed
     */
    public function getFromContactName()
    {
        return $this->from_contact_name;
    }

    /**
     * @param mixed $from_contact_name
     */
    public function setFromContactName($from_contact_name): void
    {
        $this->from_contact_name = $from_contact_name;
    }

    /**
     * @return mixed
     */
    public function getFromContactPhone()
    {
        return $this->from_contact_phone;
    }

    /**
     * @param mixed $from_contact_phone
     */
    public function setFromContactPhone($from_contact_phone): void
    {
        $this->from_contact_phone = $from_contact_phone;
    }

    /**
     * @return mixed
     */
    public function getToAddr()
    {
        return $this->to_addr;
    }

    /**
     * @param mixed $to_addr
     */
    public function setToAddr($to_addr): void
    {
        $this->to_addr = $to_addr;
    }

    /**
     * @return mixed
     */
    public function getToLat()
    {
        return $this->to_lat;
    }

    /**
     * @param mixed $to_lat
     */
    public function setToLat($to_lat): void
    {
        $this->to_lat = $to_lat;
    }

    /**
     * @return mixed
     */
    public function getToLon()
    {
        return $this->to_lon;
    }

    /**
     * @param mixed $to_lon
     */
    public function setToLon($to_lon): void
    {
        $this->to_lon = $to_lon;
    }

    /**
     * @return mixed
     */
    public function getTimeSlotBegin()
    {
        return $this->time_slot_begin;
    }

    /**
     * @param mixed $time_slot_begin
     */
    public function setTimeSlotBegin($time_slot_begin): void
    {
        $this->time_slot_begin = $time_slot_begin;
    }

    /**
     * @return mixed
     */
    public function getTimeSlotEnd()
    {
        return $this->time_slot_end;
    }

    /**
     * @param mixed $time_slot_end
     */
    public function setTimeSlotEnd($time_slot_end): void
    {
        $this->time_slot_end = $time_slot_end;
    }

    /**
     * @return mixed
     */
    public function getProductsNCode()
    {
        return $this->products_n_code;
    }

    /**
     * @param mixed $products_n_code
     */
    public function setProductsNCode($products_n_code): void
    {
        $this->products_n_code = $products_n_code;
    }

    /**
     * @return mixed
     */
    public function getProductsNName()
    {
        return $this->products_n_name;
    }

    /**
     * @param mixed $products_n_name
     */
    public function setProductsNName($products_n_name): void
    {
        $this->products_n_name = $products_n_name;
    }

    /**
     * @return mixed
     */
    public function getProductsNCount()
    {
        return $this->products_n_count;
    }

    /**
     * @param mixed $products_n_count
     */
    public function setProductsNCount($products_n_count): void
    {
        $this->products_n_count = $products_n_count;
    }

    /**
     * @return mixed
     */
    public function getProductsNCost()
    {
        return $this->products_n_cost;
    }

    /**
     * @param mixed $products_n_cost
     */
    public function setProductsNCost($products_n_cost): void
    {
        $this->products_n_cost = $products_n_cost;
    }

    /**
     * @return mixed
     */
    public function getProductsNWeight()
    {
        return $this->products_n_weight;
    }

    /**
     * @param mixed $products_n_weight
     */
    public function setProductsNWeight($products_n_weight): void
    {
        $this->products_n_weight = $products_n_weight;
    }

    /**
     * @return mixed
     */
    public function getProductsNVolume()
    {
        return $this->products_n_volume;
    }

    /**
     * @param mixed $products_n_volume
     */
    public function setProductsNVolume($products_n_volume): void
    {
        $this->products_n_volume = $products_n_volume;
    }

    /**
     * @return mixed
     */
    public function getSchemaV()
    {
        return $this->schema_v;
    }

    /**
     * @param mixed $schema_v
     */
    public function setSchemaV($schema_v): void
    {
        $this->schema_v = $schema_v;
    }

    /**
     * @return mixed
     */
    public function getLegalEntity()
    {
        return $this->legal_entity;
    }

    /**
     * @param mixed $legal_entity
     */
    public function setLegalEntity($legal_entity): void
    {
        $this->legal_entity = $legal_entity;
    }

    /**
     * @return mixed
     */
    public function getPayMethod()
    {
        return $this->pay_method;
    }

    /**
     * @param mixed $pay_method
     */
    public function setPayMethod($pay_method): void
    {
        $this->pay_method = $pay_method;
    }

    /**
     * @return mixed
     */
    public function getExternalId()
    {
        return $this->external_id;
    }

    /**
     * @param mixed $external_id
     */
    public function setExternalId($external_id): void
    {
        $this->external_id = $external_id;
    }

    /**
     * @return mixed
     */
    public function getRequirementsTailLift()
    {
        return $this->requirements_tail_lift;
    }

    /**
     * @param mixed $requirements_tail_lift
     */
    public function setRequirementsTailLift($requirements_tail_lift): void
    {
        $this->requirements_tail_lift = $requirements_tail_lift;
    }

    /**
     * @return mixed
     */
    public function getRequirementsLoaders()
    {
        return $this->requirements_loaders;
    }

    /**
     * @param mixed $requirements_loaders
     */
    public function setRequirementsLoaders($requirements_loaders): void
    {
        $this->requirements_loaders = $requirements_loaders;
    } // необходимое количество грузчиков



}