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
				<h3><i class="fa fa-angle-right"></i> Lista de Pizzas</h3>

				<!-- BASIC FORM ELELEMNTS -->
				<div class="row mt">

		<div class="col-md-12">
						<div class="form-panel">
							
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('Tipo'); ?></th>
						<th><?php echo $this->Paginator->sort('Preco'); ?></th>
						<th><?php echo $this->Paginator->sort('Ingredientes'); ?></th>
						<th><?php echo $this->Paginator->sort('Fotos'); ?></th>
						<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($pizzas as $pizza): ?>
					<tr>
						<td><?php echo h($pizza['Pizza']['id']); ?>&nbsp;</td>
						<td><?php echo h($pizza['Pizza']['name']); ?>&nbsp;</td>
						<td><?php echo h($pizza['Pizza']['Tipo']); ?>&nbsp;</td>
						<td><?php echo h($pizza['Pizza']['Preco']); ?>&nbsp;</td>
						<td><?php echo h($pizza['Pizza']['Ingredientes']); ?>&nbsp;</td>
						<td><?php echo h($pizza['Pizza']['Fotos']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($pizza['Categoria']['name'], array('controller' => 'categorias', 'action' => 'view', $pizza['Categoria']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $pizza['Pizza']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-ok"></span>', array('plugin'=>null, 'controller'=>'pedidos', 'action' => 'add', $pizza['Pizza']['id']), array('escape' => false)); ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>


	
		

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->