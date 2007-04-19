<?php
/**
 * Limb Web Application Framework
 *
 * @link http://limb-project.com
 *
 * @copyright  Copyright &copy; 2004-2007 BIT
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 * @version    $Id: lmbTree.interface.php 5692 2007-04-19 14:21:01Z alex433 $
 * @package    tree
 */

interface lmbTree
{
  function initTree();
  function isNode($id);
  function getNode($id);
  function getRootNode();
  function getParent($id);
  function getParents($id);
  function getSiblings($id);
  function getChildren($id, $depth = 1);
  function getChildrenAll($id);
  function countChildren($id, $depth = 1);
  function countChildrenAll($id);
  function createNode($parent_node, $values);
  function deleteNode($id);
  function updateNode($id, $values, $internal = false);
  function moveNode($id, $target_id);
  function getNodesByIds($ids_array);
  function getNodeByPath($path, $delimiter='/');
  function getPathToNode($node, $delimeter = '/');
}

?>