<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.admin' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'FirewallContext.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TargetPathTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ExceptionListener.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'EntryPoint'.\DIRECTORY_SEPARATOR.'AuthenticationEntryPointInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'EntryPoint'.\DIRECTORY_SEPARATOR.'FormAuthenticationEntryPoint.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AbstractListener.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ListenerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'LegacyListenerTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'LogoutListener.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'LogoutSuccessHandlerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'DefaultLogoutSuccessHandler.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'FirewallConfig.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'LogoutHandlerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Logout'.\DIRECTORY_SEPARATOR.'SessionLogoutHandler.php';

$a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
$b = ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php'));
$c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($b, 'admin_login'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'admin_logout']);
$c->addHandler(($this->privates['security.logout.handler.csrf_token_clearing'] ?? $this->load('getSecurity_Logout_Handler_CsrfTokenClearingService.php')));
$c->addHandler(($this->privates['security.logout.handler.session'] ?? ($this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler())));

return $this->privates['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.context_listener.0'] ?? $this->load('getSecurity_ContextListener_0Service.php'));
    yield 2 => ($this->privates['security.authentication.listener.form.admin'] ?? $this->load('getSecurity_Authentication_Listener_Form_AdminService.php'));
    yield 3 => ($this->privates['security.authentication.listener.anonymous.admin'] ?? $this->load('getSecurity_Authentication_Listener_Anonymous_AdminService.php'));
    yield 4 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), $b, 'admin', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $b, 'admin_login', false), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin', 'security.user_checker', '.security.request_matcher.UeytjTY', true, false, 'Eccube\\Security\\Core\\User\\MemberProvider', 'admin', 'security.authentication.form_entry_point.admin', NULL, NULL, [0 => 'form_login', 1 => 'anonymous'], NULL));
