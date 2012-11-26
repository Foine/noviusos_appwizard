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

class Application_Generator
{
    public static function generate($config, $input)
    {
        $root_dir = APPPATH.'applications/'.$input['application_settings']['folder'];

        if (file_exists($root_dir)) {
            throw new \Exception('Folder already exists!');
        }
        mkdir($root_dir);
        static::generateFolders($root_dir, $config['folders']);
        static::generateFiles($root_dir, $config, $input);
    }

    public static function indent($pre, $str)
    {
        $exploded_str = explode("\n", $str);
        foreach ($exploded_str as &$line) {
            $line = $pre.$line;
        }
        return implode("\n", $exploded_str);
    }

    protected static function generateFolders($root_dir, $folders)
    {
        foreach ($folders as $folder) {
            mkdir($root_dir.'/'.$folder);
        }
    }

    protected static function generateFiles($root_dir, $config, $input)
    {
        $files = $config['files']($root_dir, $input, $config);
        foreach ($files as $file) {
            if (!is_array($file)) {
                $file = array(
                    'template' => $file,
                    'destination' => $file,
                    'data' => array('data' => $input, 'config' => $config),
                );
            }
            file_put_contents($root_dir.'/'.$file['destination'], render($config['generation_path'].'/'.$file['template'], $file['data'], false));
            chmod($root_dir.'/'.$file['destination'], 0777);
        }
    }
}