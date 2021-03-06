<?php

namespace Parvula\Core;

/**
 * MarkdownPageSerializer class
 *
 * @package Parvula
 * @version 0.3.0
 * @since 0.1.0
 * @author Fabien Sa
 * @license MIT License
 */
class MarkdownPageSerializer extends ParvulaPageSerializer implements PageSerializerInterface {

	/**
	 * Serialize page
	 * @param Page $page
	 * @return boolean
	 */
	public function serialize(Page $page) {

		$data = parent::serialize($page);

		return $data;
	}

	/**
	 * Unserialize data
	 * @param string $data
	 * @return Page
	 */
	public function unserialize($filePath, $data = null) {

		$page = parent::unserialize($filePath, $data);
		$parser = new MarkdownParvula;

		$page->content = $parser->transform($page->content);

		return $page;
	}

}
