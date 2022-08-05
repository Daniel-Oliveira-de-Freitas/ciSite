<?php $this->load->view('header'); ?>
<div>
    <section>
        <div class="coluna col3 sidebar">
            <h3>Clientes Satisfeitos</h3>
            <ul class="sem-marcador sem-padding">
                <li><a href="">Nome da Empresa 1</a></li>
                <li><a href="">Nome da Empresa 2</a></li>
                <li><a href="">Nome da Empresa 3</a></li>
                <li><a href="">Nome da Empresa 4</a></li>
                <li><a href="">Nome da Empresa 5</a></li>
                <li><a href="">Nome da Empresa 6</a></li>
                <li><a href="">Nome da Empresa 7</a></li>
            </ul>
            <a href="clientes.html" class="botao">Ver Todos &raquo;</a>
        </div>
        <div class="coluna col9">
            <h2>Último Trabalho: <em>Empresa ABC</em></h2>
            <img src="assets\img\thumb-grande.jpg" alt="" />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at ultrices metus. 
            Suspendisse dui turpis, commodo sed pretium non, facilisis id dui. Vivamus eu enim efficitur, 
            pharetra turpis vel, rhoncus odio. Nulla orci orci, hendrerit sit amet nisl ac, faucibus iaculis
            elit. Quisque urna ex, tincidunt non pharetra aliquet, tempus elementum mauris. Maecenas et enim
            ac libero porttitor finibus. Quisque eu erat tincidunt, dignissim quam sed, iaculis lorem.
            </p>
        </div>
    </section>
    <div>
        <div class="conteudo Extra">
            <div class="linha">
                <div class="col7">
                    <section>
                        <h2>Como um site pode ajudar uma empresa?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at ultrices metus. 
                        Suspendisse dui turpis, commodo sed pretium non, facilisis id dui.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at ultrices metus. 
                        Suspendisse dui turpis, commodo sed pretium non, facilisis id dui.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at ultrices metus. 
                        Suspendisse dui turpis, commodo sed pretium non, facilisis id dui.</p>
                    </section>
                </div>
                <div class="coluna col5">
                    <?php $this->load->view('noticoas');?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>