<div class="nav-collapse collapse"></div>
<?php if (Auth::check()): ?>
  <ul class="nav">
    <?php if (Auth::user()->officer): ?>
      <li>
        <a href="<?php echo Jade\Dumper::_text( route('vendors') ); ?>" data-pjax="data-pjax">Vendors</a>
      </li>
      <li>
        <a href="<?php echo Jade\Dumper::_text( route('my_projects') ); ?>" data-pjax="data-pjax">Projects</a>
      </li>
    <?php else: ?>
      <li>
        <a href="<?php echo Jade\Dumper::_text( route('my_bids') ); ?>" data-pjax="data-pjax">Bids</a>
      </li>
      <li>
        <a href="<?php echo Jade\Dumper::_text( route('projects') ); ?>" data-pjax="data-pjax">Projects</a>
      </li>
    <?php endif; ?>
  </ul>
  <ul class="nav pull-right">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?php echo Jade\Dumper::_text(Auth::user()->email); ?>
        <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li>
          <a href="<?php echo Jade\Dumper::_text(route('account')); ?>" data-pjax="data-pjax">Account Settings</a>
        </li>
        <li>
          <a href="<?php echo Jade\Dumper::_text( route('signout') ); ?>" data-pjax="data-pjax">Sign Out</a>
        </li>
      </ul>
    </li>
    <li class="dropdown notification-nav-item">
      <a id="notifications-dropdown-trigger" class="dropdown-toggle" data-toggle="dropdown" href="#">
        &nbsp;
        <i class="icon-white icon-envelope"></i>
        <?php $count = Auth::user()->unread_notification_count() ?>
        <span class="badge badge-inverse unread-notification-badge <?php echo Jade\Dumper::_text($count == 0 ? 'hide' : ''); ?>"><?php echo Jade\Dumper::_text($count); ?>
</span>
        &nbsp;
      </a>
      <ul id="notifications-dropdown" class="dropdown-menu loading"></ul>
    </li>
  </ul>
<?php else: ?>
  <ul class="nav">
    <li>
      <a href="<?php echo Jade\Dumper::_text( route('projects') ); ?>" data-pjax="data-pjax">Browse Projects</a>
    </li>
  </ul>
  <ul class="nav pull-right">
    <li>
      <a href="#signinModal" data-toggle="modal">Sign In</a>
    </li>
  </ul>
<?php endif; ?>