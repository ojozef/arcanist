          $type == ArcanistDiffChangeType::TYPE_COPY_AWAY ||
          $type == ArcanistDiffChangeType::TYPE_CHANGE) {
        $old_phid = $old_binary->getMetadata('old:binary-phid');