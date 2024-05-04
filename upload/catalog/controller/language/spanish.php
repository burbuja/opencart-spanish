<?php
namespace Opencart\Catalog\Controller\Extension\OpencartSpanish\Language;
class Spanish extends \Opencart\System\Engine\Controller {
    public function setFlag(string &$route, array &$args, array &$output): array {
		if (isset($output['es-cl']['image'])) {
			$this->load->model('localisation/country');

			$countries = $this->model_localisation_country->getCountries();

			$config_country_id = $this->config->get('config_country_id');

			$country_id = array_search($config_country_id, array_column($countries, 'country_id'));

			$country_code = strtolower($countries[$country_id]['iso_code_2']);

			$flags = [
				'ar', 'bo', 'cl', 'co', 'cr', 'cu', 'do', 'ec', 'es', 'gq', 'gt', 'hn', 'mx', 'ni', 'pa', 'pe', 'pr', 'py', 'sv', 'uy', 've'
			];

			if (!in_array($country_code, $flags)) {
				$country_code = 'es';
			}

			$output['es-cl']['image'] = HTTP_SERVER . 'extension/opencart_spanish/catalog/language/es-cl/es-' . $country_code . '.png';

			return $output;
		}
	}
}