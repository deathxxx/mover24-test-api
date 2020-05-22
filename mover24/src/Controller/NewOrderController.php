<?php

namespace App\Controller;

use App\Entity\Delivery;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Flex\Cache;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class NewOrderController extends AbstractController
{
    /**
     * @Route("/", name="new_order")
     */
    public function index()
    {

//        $r = CurlRequest::CallAPI("GET", "http://192.168.0.90:8087/test");
//        print_r($r);

        return $this->render('new_order/index.html.twig', [
            'controller_name' => 'Index',
        ]);
    }

    /**
     * @Route("/test", name="test")
     */
    public function test()
    {
        $response = new Response(
            'hi3435',
            Response::HTTP_OK,
            ['content-type' => 'text/html']
        );

        return $response;
    }


    /**
     * @Route("/new", name="new")
     */
    public function new(Request $request)
    {
        // creates a task object and initializes some data for this example
        $delivery = new Delivery();
        $delivery->setNameV("test"); // имя покупателя
        $delivery->setSurname("surname"); // фамилия (необязательный)
        $delivery->setPatronymic("patronimic"); // отчество (необязательный)
        $delivery->setPhone("phone"); // телефон покупателя в формате ^7[0-9]{10}$
        $delivery->setFromAddr("from addr"); // адрес склада
        $delivery->setFromLat("from lat"); // широта склада (необязательный)
        $delivery->setFromLon("from lon"); // долгота склада (необязательный)
        $delivery->setFromContactName("from contact name"); // имя контактного лица на складе
        $delivery->setFromContactPhone("from contact phone"); // контактный телефон на складе
        $delivery->setToAddr("to addr"); // адрес доставки
        $delivery->setToLat("to lat"); // широта доставки (необязательный)
        $delivery->setToLon("to lon"); // долгота доставки (необязательный)
        $delivery->setTimeSlotBegin("time slot begin"); // начальный интервал доставки в формате 2017-03-23T11:46:15+0300
        $delivery->setTimeSlotEnd("time slot end"); // начальный интервал доставки в формате 2017-03-23T14:46:15+0300
        $delivery->setProductsNCode("products n code"); // артикул товара
        $delivery->setProductsNName("products n name"); // название товара
        $delivery->setProductsNCount("products n count"); // количество единиц товара
        $delivery->setProductsNCost("products n cost"); // стоимость товара
        $delivery->setProductsNWeight("product and weight"); // вес в кг
        $delivery->setProductsNVolume("products n volume"); // объём м³
        $delivery->setSchemaV("schema"); // схема доставки (id)
        $delivery->setLegalEntity("legal_entity"); // юр. лицо (id)
        $delivery->setPayMethod("pay method"); // способ оплаты (cash, card, bank)
        $delivery->setExternalId("external id"); // внешний id заявки (необязательный)
        $delivery->setRequirementsTailLift("requirements_tail_lift"); // 1, если требуется гидроборт
        $delivery->setRequirementsLoaders("requirements_loaders");


        $form = $this->createFormBuilder($delivery)
            ->add('name_v', TextType::class)
            ->add('surname', TextType::class)
            ->add('patronymic', TextType::class)
            ->add('phone', TextType::class)
            ->add('from_addr', TextType::class)
            ->add('from_lat', TextType::class)
            ->add('from_lon', TextType::class)
            ->add('from_contact_name', TextType::class)
            ->add('from_contact_phone', TextType::class)
            ->add('to_addr', TextType::class)
            ->add('to_lat', TextType::class)
            ->add('to_lon', TextType::class)
            ->add('time_slot_begin', TextType::class)
            ->add('time_slot_end', TextType::class)
            ->add('products_n_code', TextType::class)
            ->add('products_n_name', TextType::class)
            ->add('products_n_count', TextType::class)
            ->add('products_n_cost', TextType::class)
            ->add('products_n_weight', TextType::class)
            ->add('products_n_volume', TextType::class)
            ->add('schema_v', TextType::class)
            ->add('legal_entity', TextType::class)
            ->add('pay_method', TextType::class)
            ->add('external_id', TextType::class)
            ->add('requirements_tail_lift', TextType::class)
            ->add('requirements_loaders', TextType::class)

            ->add('save', SubmitType::class, ['label' => 'Create Delivery'])
            ->getForm();


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $delivery = $form->getData();

            $user = 'user';
            $pass = 'pass';
            $resp = MoverApiV4::PostDelivery($user, $pass, $delivery);

//            return $this->redirectToRoute('task_success');
            $response = new Response(
                $resp,
                Response::HTTP_OK,
                ['content-type' => 'text/html']
            );
        }

        return $this->render('new_order/delivery.twig', [
            'form' => $form->createView(),
            'controller_name' => 'New Delivery',
        ]);
    }




}
