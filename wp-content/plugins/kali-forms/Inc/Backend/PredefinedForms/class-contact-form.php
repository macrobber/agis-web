<?php

namespace KaliForms\Inc\Backend\PredefinedForms;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class Contact_Form
 *
 * @package Inc\Backend\PredefinedForms
 */
class Contact_Form extends Predefined_Form
{
    /**
     * Class constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->id = 'contact';
        $this->name = esc_html__('Contact form', 'kaliforms');
        $this->description = esc_html__('A simple form meant to help you comunicate with your site users.', 'kaliforms');
        $this->emails = [
            ["fromName" => "{sitetitle}", "fromEmail" => "{admin_email}", "toEmail" => "{email}", "replyTo" => "", "ccEmail" => "", "bccEmail" => "", "emailSubject" => "Contact form confirmation", "emailAttachment" => "", "emailBody" => "<p>Hello {first-name},</p> <p>This is your confirmation email for the form submitted on <a href='{homeurl}'>{sitetitle}</a>.</p><p>Message:<br /> {message}</p><p>Have a good day</p>", "index" => "0"],
        ];
        $this->thank_you_message = ['key' => 'thankYouMessage', 'value' => '{first-name}, thank you for your submission!'];
        $this->grid = [
            ["w" => 12, "h" => 1, "x" => 0, "y" => 0, "i" => "freeText0", "minW" => 3, "maxH" => 1, "moved" => false, "static" => false],
            ["w" => 12, "h" => 1, "x" => 0, "y" => 2, "i" => "freeText1", "minW" => 3, "maxH" => 1, "moved" => false, "static" => false],
            ["w" => 6, "h" => 1, "x" => 0, "y" => 3, "i" => "textbox2", "minW" => 3, "maxH" => 1, "moved" => false, "static" => false],
            ["w" => 6, "h" => 1, "x" => 6, "y" => 3, "i" => "textbox3", "minW" => 3, "maxH" => 1, "moved" => false, "static" => false],
            ["w" => 12, "h" => 1, "x" => 0, "y" => 5, "i" => "textbox4", "minW" => 3, "maxH" => 1, "moved" => false, "static" => false],
            ["w" => 12, "h" => 1, "x" => 0, "y" => 7, "i" => "textarea5", "minW" => 3, "maxH" => 1, "moved" => false, "static" => false],
            ["w" => 12, "h" => 1, "x" => 0, "y" => 9, "i" => "submitButton6", "minW" => 3, "maxH" => 1, "moved" => false, "static" => false],
            ["w" => 12, "h" => 1, "x" => 0, "y" => 1, "i" => "divider7", "minW" => 12, "maxH" => 1, "moved" => false, "static" => false],
            ["w" => 12, "h" => 1, "x" => 0, "y" => 4, "i" => "divider8", "minW" => 12, "maxH" => 1, "moved" => false, "static" => false],
            ["w" => 12, "h" => 1, "x" => 0, "y" => 6, "i" => "divider9", "minW" => 12, "maxH" => 1, "moved" => false, "static" => false],
            ["w" => 12, "h" => 1, "x" => 0, "y" => 8, "i" => "divider10", "minW" => 12, "maxH" => 1, "moved" => false, "static" => false],
        ];
        $this->field_components = [
            ["id" => "freeText", "label" => "Free Text", "internalId" => "freeText0", "properties" => ["id" => "greetings", "content" => "Hello, please use the form below in order to get in touch with our team."], "constraint" => 0],
            ["id" => "freeText", "label" => "Free Text", "internalId" => "freeText1", "properties" => ["id" => "name", "content" => "Name"], "constraint" => "none"],
            ["id" => "textbox", "label" => "Text box", "internalId" => "textbox2", "properties" => ["id" => "first-name", "name" => "first-name", "caption" => "First Name", "description" => "", "default" => "", "type" => "text", "placeholder" => "", "required" => true, "readonly" => false], "constraint" => 0],
            ["id" => "textbox", "label" => "Text box", "internalId" => "textbox3", "properties" => ["id" => "last-name", "name" => "last-name", "caption" => "Last Name", "description" => "", "default" => "", "type" => "text", "placeholder" => "", "required" => true, "readonly" => false], "constraint" => 0],
            ["id" => "textbox", "label" => "Text box", "internalId" => "textbox4", "properties" => ["id" => "email", "name" => "email", "caption" => "Email", "description" => "", "default" => "", "type" => "text", "placeholder" => "", "required" => true, "readonly" => false], "constraint" => "none"],
            ["id" => "textarea", "label" => "Textarea", "internalId" => "textarea5", "properties" => ["id" => "message", "name" => "message", "caption" => "Message", "description" => "", "default" => "", "placeholder" => "", "required" => true, "readonly" => false], "constraint" => 0],
            ["id" => "submitButton", "label" => "Submit Button", "internalId" => "submitButton6", "properties" => ["id" => "submit", "caption" => "Send message", "description" => ""], "constraint" => "none"],
            ["id" => "divider", "label" => "Divider", "internalId" => "divider7", "properties" => ["id" => "first-divider", "name" => "first-divider", "caption" => "", "type" => "line"], "constraint" => 12],
            ["id" => "divider", "label" => "Divider", "internalId" => "divider8", "properties" => ["id" => "second-divider", "name" => "second-divider", "caption" => "", "type" => "space"], "constraint" => 12],
            ["id" => "divider", "label" => "Divider", "internalId" => "divider9", "properties" => ["id" => "third-divider", "name" => "third-divider", "caption" => "", "type" => "space"], "constraint" => 12],
            ["id" => "divider", "label" => "Divider", "internalId" => "divider10", "properties" => ["id" => "fourth-divider", "name" => "fourth-divider", "caption" => "", "type" => "space"], "constraint" => 12],
        ];
    }
}
