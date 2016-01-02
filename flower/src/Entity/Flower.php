<?php
/**
 * Created by PhpStorm.
 * User: edxxu
 * Date: 12/26/15
 * Time: 2:02 PM
 */

/**
 * @file
 * Contains \Drupal\flower\Entity\Flower.
 */

namespace Drupal\flower\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\flower\FlowerInterface;

/**
 * Defines a Flower configuration entity class.
 *
 * @ConfigEntityType(
 *   id = "flower",
 *   label = @Translation("Flower"),
 *   fieldable = FALSE,
 *   handlers = {
 *     "list_builder" = "Drupal\flower\FlowerListBuilder",
 *     "form" = {
 *       "add" = "Drupal\flower\Form\FlowerForm",
 *       "edit" = "Drupal\flower\Form\FlowerForm",
 *       "delete" = "Drupal\flower\Form\FlowerDeleteForm"
 *     }
 *   },
 *   config_prefix = "flower",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name"
 *   },
 *   links = {
 *     "edit-form" = "/admin/structure/flowers/edit/{flower}",
 *     "delete-form" = "/admin/structure/flowers/delete/{flower}"
 *   }
 * )
 */
class Flower extends ConfigEntityBase implements FlowerInterface {

  /**
   * The ID of the flower.
   *
   * @var string
   */
  public $id;

  /**
   * The flower name.
   *
   * @var string
   */
  public $name;

  /**
   * The flower color.
   *
   * @var string
   */
  public $color;

  /**
   * The number of petals.
   *
   * @var int
   */
  public $petals;

  /**
   * The season in which this flower can be found.
   *
   * @var string
   */
  public $season;

}