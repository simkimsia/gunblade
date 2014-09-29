<?php
/**
 * 
 * This file is part of the GunBlade Project for PHP.
 * 
 * @package GunBlade.XML
 * 
 * @license http://opensource.org/licenses/MIT
 * 
 */


/**
 * 
 * \GunBlade\XML\Node is how you handle all 
 * the XML and HTML tags.
 *
 */
class Node {
	// Element node type, see Nokogiri::XML::Node#element?
    const ELEMENT_NODE =       1;
    // Attribute node type
    const ATTRIBUTE_NODE =     2;
    // Text node type, see Nokogiri::XML::Node#text?
    const TEXT_NODE =          3;
    // CDATA node type, see Nokogiri::XML::Node#cdata?
    const CDATA_SECTION_NODE = 4;
    // Entity reference node type
    const ENTITY_REF_NODE =    5;
    // Entity node type
    const ENTITY_NODE =        6;
    // PI node type
    const PI_NODE =            7;
    // Comment node type, see Nokogiri::XML::Node#comment?
    const COMMENT_NODE =       8;
    // Document node type, see Nokogiri::XML::Node#xml?
    const DOCUMENT_NODE =      9;
    // Document type node type
    const DOCUMENT_TYPE_NODE = 10;
    // Document fragment node type
    const DOCUMENT_FRAG_NODE = 11;
    // Notation node type
    const NOTATION_NODE =      12;
    // HTML document node type, see Nokogiri::XML::Node#html?
    const HTML_DOCUMENT_NODE = 13;
    // DTD node type
    const DTD_NODE =           14;
    // Element declaration type
    const ELEMENT_DECL =       15;
    // Attribute declaration type
    const ATTRIBUTE_DECL =     16;
    // Entity declaration type
    const ENTITY_DECL =        17;
    // Namespace declaration type
    const NAMESPACE_DECL =     18;
    // XInclude start type
    const XINCLUDE_START =     19;
    // XInclude end type
    const XINCLUDE_END =       20;
    // DOCB document node type
    const DOCB_DOCUMENT_NODE = 21;

    public function __construct($name, $document) {
    	
    }
}