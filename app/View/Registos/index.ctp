 	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

  	<!-- Latest compiled and minified JavaScript -->
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
			<style>
		#content {
			padding-left: 250px;
			padding-right: 250px;
		}
	</style>


	<div class="row"><br /><br />
				<section id="container" >
			<section id="content">
				<h3><i class="fa fa-angle-right"></i> Lista de Registos</h3>

				<!-- BASIC FORM ELELEMNTS -->
				<div class="row mt">



	<div class="row">


		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('apelido'); ?></th>
						<th><?php echo $this->Paginator->sort('telefone'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('nuit'); ?></th>
						<th><?php echo $this->Paginator->sort('numbi'); ?></th>
						<th><?php echo $this->Paginator->sort('casa'); ?></th>
						<th><?php echo $this->Paginator->sort('quarteirao'); ?></th>
						<th><?php echo $this->Paginator->sort('bairro'); ?></th>
						<th><?php echo $this->Paginator->sort('distrito'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($registos as $registo): ?>
					<tr>
						<td><?php echo h($registo['Registo']['id']); ?>&nbsp;</td>
						<td><?php echo h($registo['Registo']['name']); ?>&nbsp;</td>
						<td><?php echo h($registo['Registo']['apelido']); ?>&nbsp;</td>
						<td><?php echo h($registo['Registo']['telefone']); ?>&nbsp;</td>
						<td><?php echo h($registo['Registo']['email']); ?>&nbsp;</td>
						<td><?php echo h($registo['Registo']['nuit']); ?>&nbsp;</td>
						<td><?php echo h($registo['Registo']['numbi']); ?>&nbsp;</td>
						<td><?php echo h($registo['Registo']['casa']); ?>&nbsp;</td>
						<td><?php echo h($registo['Registo']['quarteirao']); ?>&nbsp;</td>
						<td><?php echo h($registo['Registo']['bairro']); ?>&nbsp;</td>
						<td><?php echo h($registo['Registo']['distrito']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $registo['Registo']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $registo['Registo']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $registo['Registo']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $registo['Registo']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->