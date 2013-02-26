<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

namespace Nos\AppWizard;

class Controller_Admin_Application extends \Nos\Controller_Admin_Application
{
    public function prepare_i18n()
    {
        parent::prepare_i18n();
        \Nos\I18n::current_dictionary('noviusos_appwizard::common');
    }

    public function action_index()
    {
        return \View::forge('noviusos_appwizard::admin/form/basic/form', array('config' => $this->config['basic']), false);
    }

    public function action_generate()
    {
        $application_informations = Application_Generator::generate($this->config['basic'], \Input::post());
        \Response::json(array(
            'notify' => __('Bravo! Your application has been created. If you’ve chosen to install it on this Novius OS, go to the home tab to try it out.'),
            'application_informations' => $application_informations,
            'dispatchEvent' => array(
                'name' => 'Nos\\Application',
                'action' => 'refresh',
            )
        ));
    }
}
