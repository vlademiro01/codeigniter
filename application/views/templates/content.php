
<div id="container">

    <div class="page-header">
     <h1>Usuários do Laboratório <small>LIA</small></h1>
    </div>

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Lista dos usuários do laboratório</div>

    <nav>
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo; Página Anterior</span>
          </a>
       </li>
       <li>
         <a href="#" aria-label="Next">
           <span aria-hidden="true">&raquo; Próxima Página</span>
         </a>
       </li>
      </ul>
    </nav>
      
      
      <!-- Table -->
      <table class="table">

         <tr>
          <th>Login</th>
          <th>Nome</th>		
          <th>Digital</th>
        </tr>
 <?php for ($i = 0; $i < count($listagem); ++$i) { ?>
                              <tr>
                                   <td><?php echo $listagem[$i]->Login; ?></td>
                                   <td><?php echo $listagem[$i]->Usuário; ?></td>
                                   <td><?php echo $listagem[$i]->Digital; ?></td>
                              </tr>
                         <?php } ?>
        </table>
    </div>
    
    <nav>
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
       </li>
       <li>
         <a href="#" aria-label="Next">
           <span aria-hidden="true">&raquo;</span>
         </a>
       </li>
      </ul>
    </nav>
</div>
