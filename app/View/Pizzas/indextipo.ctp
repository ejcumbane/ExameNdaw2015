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
				<h3><i class="fa fa-angle-right"></i> Lista de Clientes com mais pedidos</h3>

				<!-- BASIC FORM ELELEMNTS -->
				<div class="row mt">

		<div class="col-md-12">
						<div class="form-panel">
							<h4 class="mb"><i class="fa fa-angle-right"></i> Faça o seu pedido</h4>
							
			<?php
		// The base url is the url where we'll pass the filter parameters
		$base_url = array('plugin'=>null,'controller' => 'registos', 'action' => 'index');
		echo $this->Form->create("Filter",array('url' => $base_url, 'class' => 'filter'));
		// To reset all the filters we only need to redirect to the base_url
		
		echo "</div>";
		
		?>
			<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
				<tr>
					<td width="500"><?php echo $this->Form->input('search', array('class' => 'form-control', 'placeholder'=>'Inserir o tipo...','label'=>FALSE));?></td>
					<td><button type="submit" href="#" class="btn btn-primary pull-left"><i class="glyphicon glyphicon-search"></i> Buscar </button> </td>
					<td><?php echo $this->Html->link("Reset",$base_url, array('class'=>'btn btn-danger pull-left ', 'value'=>'Limpar'));  ?></td>
				</tr>
			</table>
		<?php echo $this->Form->end();?>

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
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-ok"></span>', array('plugin'=>null, 'controller'=>'pedidos', 'action' => 'add', $pizza['Pizza']['id']), array('escape' => false)); ?>						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->