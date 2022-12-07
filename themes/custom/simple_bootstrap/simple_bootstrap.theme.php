<?php

/**
 * @file
 *
 * Theme functions for simple bootstrap.
 * preprocess for page title
 *
 *
 */

function simple_bootstrap_preprocess_page_title(&$variables)
{

  // This example is from rdf_preprocess_image(). It adds an RDF attribute
  // to the image hook's variables.
  $variables['pretitle'] = "ARTICLES";
}
