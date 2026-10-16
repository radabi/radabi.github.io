<div id="dashboard" class="container">
	<div class="row">
		<div class="col-md-7">
			<div class="container border-top pt-4 mt-4">
				<div class="row">
					<div class="col">
						<a class="quick-links text-center" target="_blank" href="https://docs.bludit.com">
							<div class="fa fa-compass quick-links-icons"></div>
							<div><?php $L->p('Documentation') ?></div>
						</a>
					</div>
					<div class="col border-left border-right">
						<a class="quick-links text-center" target="_blank" href="https://forum.bludit.org">
							<div class="fa fa-support quick-links-icons"></div>
							<div><?php $L->p('Forum support') ?></div>
						</a>
					</div>
					<div class="col">
						<a class="quick-links text-center" target="_blank" href="https://discord.gg/CFaXEdZWds">
							<div class="fa fa-comments quick-links-icons"></div>
							<div><?php $L->p('Chat support') ?></div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<a class="quick-links text-center" target="_blank" href="https://themes.bludit.com">
							<div class="fa fa-desktop quick-links-icons"></div>
							<div><?php $L->p('Themes') ?></div>
						</a>
					</div>
					<div class="col border-left border-right">
						<a class="quick-links text-center" target="_blank" href="https://plugins.bludit.com">
							<div class="fa fa-puzzle-piece quick-links-icons"></div>
							<div><?php $L->p('Plugins') ?></div>
						</a>
					</div>
					<div class="col">
						<a class="quick-links text-center" target="_blank" href="https://github.com/bludit/bludit">
							<div class="fa fa-github quick-links-icons"></div>
							<div><?php $L->p('GitHub') ?></div>
						</a>
					</div>
				</div>
			</div>

			<?php Theme::plugins('dashboard') ?>
		</div>
		<div class="col-md-5">

		</div>
	</div>
</div>
