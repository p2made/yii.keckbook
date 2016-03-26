<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use p2made\models\FullCalendarEvent;
use p2made\widgets\FullCalendarWidget;

// load assets...
p2made\assets\JqueryAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapPluginAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\JuiAsset::register($this);

p2made\assets\TimelineAsset::register($this);
p2made\demo\Things\assets\ThingsDemoAsset::register($this);
p2made\assets\MorrisAsset::register($this);

p2made\assets\Html5shivAsset::register($this);
p2made\assets\PrintShivAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.
p2made\demo\Things\demo\MorrisDemoAsset::register($this);

/* @var $this yii\web\View */
$this->title = 'myFestivals App';
$model = new \common\models\Event;

?>
<div class="body-content">

	<?= FullCalendarWidget::widget(array(
		'events' => [],
		//'events' => $events,
	)) ?>

	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-clock-o fa-fw"></i> Responsive Timeline
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<ul class="timeline">
						<li>
							<div class="timeline-badge"><i class="fa fa-check"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
									<p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
									</p>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge danger"><i class="fa fa-bomb"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge info"><i class="fa fa-save"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
									<hr>
									<div class="btn-group">
										<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-gear"></i>  <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Action</a>
											</li>
											<li><a href="#">Another action</a>
											</li>
											<li><a href="#">Something else here</a>
											</li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Lorem ipsum dolor</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
								</div>
							</div>
						</li>
					</ul>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div>
	</div><!-- /.row -->

</div><!-- /#content-wrapper -->
