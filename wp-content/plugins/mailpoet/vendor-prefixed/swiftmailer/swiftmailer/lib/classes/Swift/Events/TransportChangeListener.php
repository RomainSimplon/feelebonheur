<?php
 namespace MailPoetVendor; if (!defined('ABSPATH')) exit; interface Swift_Events_TransportChangeListener extends \MailPoetVendor\Swift_Events_EventListener { public function beforeTransportStarted(\MailPoetVendor\Swift_Events_TransportChangeEvent $evt); public function transportStarted(\MailPoetVendor\Swift_Events_TransportChangeEvent $evt); public function beforeTransportStopped(\MailPoetVendor\Swift_Events_TransportChangeEvent $evt); public function transportStopped(\MailPoetVendor\Swift_Events_TransportChangeEvent $evt); } 