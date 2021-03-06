<?php

namespace Drupal\workspace;

use Drupal\replication\ReplicationTask\ReplicationTaskInterface;

/**
 * Defines an interface for Replicator plugins.
 */
interface ReplicatorInterface {

  /**
   * Determine if the replicator applies to the given workspaces.
   *
   * @param \Drupal\workspace\WorkspacePointerInterface $source
   *   The workspace to replicate from.
   * @param \Drupal\workspace\WorkspacePointerInterface $target
   *   The workspace to replicate to.
   *
   * @return bool
   *   Returns true if this replicator applies.
   *
   * @todo should ReplicationTaskInterface be passed here as well?
   */
  public function applies(WorkspacePointerInterface $source, WorkspacePointerInterface $target);

  /**
   * Perform the replication from the source to target workspace.
   *
   * @param \Drupal\workspace\WorkspacePointerInterface $source
   *   The workspace to replicate from.
   * @param \Drupal\workspace\WorkspacePointerInterface $target
   *   The workspace to replicate to.
   * @param \Drupal\replication\ReplicationTask\ReplicationTaskInterface $task
   *   Optional information that defines the replication task to perform.
   *
   * @return \Drupal\replication\Entity\ReplicationLog
   *   The replication log entry.
   */
  public function replicate(WorkspacePointerInterface $source, WorkspacePointerInterface $target, ReplicationTaskInterface $task = NULL);

}
