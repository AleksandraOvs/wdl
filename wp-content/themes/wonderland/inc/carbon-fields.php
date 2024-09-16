<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



add_action('carbon_fields_register_fields', 'site_carbon');
function site_carbon()
{

    Container::make('theme_options', 'Контакты')

        ->set_page_menu_position(2)
        ->set_icon('dashicons-admin-generic')
        ->add_tab(__('Контакты'), array(
            Field::make('text', 'crb_address', 'Адрес')
                ->set_width(50),
            Field::make('image', 'crb_address_icon', 'Иконка адреса')
                ->set_width(50),


            Field::make('complex', 'crb_messengers_contacts', 'Контакты')
                ->add_fields(array(
                    Field::make('text', 'crb_contact_name', 'Название')
                        ->set_width(33),
                    Field::make('image', 'crb_contact_image', 'Иконка контакта')
                        ->set_width(33),
                    Field::make('text', 'crb_contact_link', 'Ссылка контакта')
                        ->set_width(33),
                )),

            Field::make('text', 'crb_header_map', 'Заголовок')
                ->set_width(33),
            Field::make('image', 'crb_header_map_icon', 'Иконка')
                ->set_width(33),
            Field::make('text', 'crb_link_map', 'Ссылка')
                ->help_text('слаг страницы, например /contacts')
                ->set_width(33),



            Field::make('text', 'crb_header_shed', 'Часы работы')
                ->set_width(50),
            Field::make('image', 'crb_header_shed_icon', 'Иконка')
                ->set_width(50),

        ))

        ->add_tab(__('Мессенджеры'), array(
            Field::make('complex', 'messengers', 'Ссылки на мессенджеры')
                ->add_fields(array(

                    Field::make('text', 'crb_mes_name', 'Название')

                        ->set_width(33),

                    Field::make('text', 'crb_mes_link', 'Ссылка на контакт')

                        ->set_width(33),

                    Field::make('image', 'crb_mes_image', 'Иконка контакта')

                        ->set_width(33),
                ))
        ))

        ->add_tab(__('Формы обратной связи'), array(

            Field::make('text', 'crb_cf_rent', 'Контактная форма для страницы Аренда')
                ->help_text('вставьте шорткод для формы обратной связи в это поле')
                ->set_width(33),

            Field::make('text', 'crb_cf_adv', 'Контактная форма для страницы Реклама')
                ->help_text('вставьте шорткод для формы обратной связи в это поле')
                ->set_width(33),

        ))

        ->add_tab(__('Файлы'), array(

            Field::make("file", "crb_politics_file", "Файл политики (PDF)")
                ->set_value_type('url'), // сохранить в метаполе ссылку на файл

            Field::make("file", "crb_advertising_file", "Файл презентации для страницы Реклама (PDF)")
                ->set_value_type('url'), // сохранить в метаполе ссылку на файл

            Field::make("file", "crb_rent_file1", "Файл общей презентации для страницы Аренда (PDF)")
                ->set_value_type('url'), // сохранить в метаполе ссылку на файл
            Field::make("file", "crb_rent_file2", "Файл презентации по участку для страницы Аренда (PDF)")
                ->set_value_type('url'), // сохранить в метаполе ссылку на файл

        ));


    Container::make('post_meta', 'Настройки страницы')
        ->show_on_page('main')

        ->add_tab(__('Первый экран'), array(
            Field::make('text', 'crb_main_heading', 'Основной заголовок')
                ->set_width(33),
            Field::make('rich_text', 'crb_second_heading', 'Второй заголовок')
                ->set_width(33),
            Field::make('rich_text', 'crb_description_heading', 'Краткое описание')
                ->set_width(33),

            Field::make('text', 'crb_hero_link', 'Ссылка кнопки')
                ->set_width(33),
            Field::make('text', 'crb_hero_link_text', 'Текст ссылки кнопки')
                ->set_width(33),

            Field::make('complex', 'crb_hero_slides', 'Слайды')
                ->add_fields(array(
                    Field::make('image', 'crb_slide_image', 'Изображение для слайда')
                    ->set_width(50),
                    Field::make('image', 'crb_slide_logo', 'Логотип для слайда')
                    ->set_width(50),
                ))

        ))

        ->add_tab(__('Код карты'), array(
            Field::make('text', 'crb_contacts_map', 'Вставить код карты')
        ))

        ->add_tab(__('Телефон'), array(
            Field::make('text', 'crb_contact_card_head1', 'Заголовок карточки')
                ->set_width(70),
            Field::make('image', 'crb_contacts_cards_icon1', 'Иконка')
                ->set_width(30),
            Field::make('complex', 'crb_contact_card_items1', 'Контакты')
                ->add_fields(array(
                    Field::make('text', 'crb_contacts_name1', 'Название контакта')
                        ->set_width(33),
                    Field::make('text', 'crb_contacts_text1', 'Текст ссылки')
                        ->set_width(33),
                    Field::make('text', 'crb_contacts_link1', 'Ссылка на телефон')
                        ->set_width(33),
                ))
        ))

        ->add_tab(__('E-mail'), array(
            Field::make('text', 'crb_contact_card_head2', 'Заголовок карточки')
                ->set_width(70),
            Field::make('image', 'crb_contacts_cards_icon2', 'Иконка')
                ->set_width(30),
            Field::make('complex', 'crb_contact_card_items2', 'Контакты')
                ->add_fields(array(
                    Field::make('text', 'crb_contacts_name2', 'Название контакта')
                        ->set_width(33),
                    Field::make('text', 'crb_contacts_text2', 'Текст ссылки')
                        ->set_width(33),
                    Field::make('text', 'crb_contacts_link2', 'Ссылка')
                        ->set_width(33),
                ))
        ))

        ->add_tab(__('Адрес'), array(
            Field::make('text', 'crb_contact_card_head3', 'Заголовок карточки')
                ->set_width(70),
            Field::make('image', 'crb_contacts_cards_icon3', 'Иконка')
                ->set_width(30),
            Field::make('complex', 'crb_contact_card_items3', 'Контакты')
                ->add_fields(array(
                    Field::make('text', 'crb_contacts_name3', 'Название контакта')
                        ->set_width(33),
                    Field::make('text', 'crb_contacts_text3', 'Текст ссылки')
                        ->set_width(33),
                    Field::make('text', 'crb_contacts_link3', 'Ссылка')
                        ->set_width(33),
                ))
        ))

        ->add_tab(__('Режим работы'), array(
            Field::make('rich_text', 'crb_contact_shed', 'Режим работы')
                ->help_text('слова в теге span открашиваются в #663780 (фиолетовый цвет)')
        ));
}
