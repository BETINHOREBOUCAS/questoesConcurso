<?php $render('header', ['titulo' => 'geral']); ?>


<div class="content">
    <div class="geral">
        <div class="form-container">
            <form method="get">
                <div class="form">
                    
                    <a href=""><div class="icon" title="Adicionar Matéria"><i class="fa-solid fa-folder-plus"></i></div></a>
                    <input type="date" name="dataInicial" title="Período Inicial">

                    <input type="date" name="dataFinal" title="Período Final">

                    <input type="submit" value="Gerar">
                </div>
            </form>
        </div>
        <hr>
        <div class="result">
            <div class="result-content">
                <div class="result-title">Total de Resoluções</div>
                <div class="result-value resolucao">10</div>
            </div>
            <div class="result-content">
                <div class="result-title">Resoluções Corretas</div>
                <div class="result-value corretas">10</div>
            </div>
            <div class="result-content">
                <div class="result-title">Resoluções Erradas</div>
                <div class="result-value erradas">10</div>
            </div>
            <div class="result-content">
                <div class="result-title">Taxa de erros</div>
                <div class="result-value taxa-erro">10%</div>
            </div>
            <div class="result-content">
                <div class="result-title">Taxa de acerto</div>
                <div class="result-value taxa-acerto">10%</div>
            </div>
        </div>
        <br>
        <div>
            <h2 style="text-align: center;">Desempenho por matéria</h2>
            <table class="table-desempenho">
                <tr>
                    <th><a href="<?=$base;?>/materia/5">Direito Constitucional</a></th>
                    <th class="resolucao">Resoluções</th>
                    <th class="corretas">Corretas</th>
                    <th class="erradas">Erradas</th>
                    <th class="taxa-erro">Taxas de erros</th>
                    <th class="taxa-acerto">Taxa de acertos</th>
                </tr>
                <tr>
                    <td></td>
                    <td class="resolucao">10</td>
                    <td class="corretas">10</td>
                    <td class="erradas">5</td>
                    <td class="taxa-erro">5%</td>
                    <td class="taxa-acerto">10%</td>
                </tr>
                <tr>
                    <th><a href="/materia">Direito Constitucional</a></th>
                    <th class="resolucao">Resoluções</th>
                    <th class="corretas">Corretas</th>
                    <th class="erradas">Erradas</th>
                    <th class="taxa-erro">Taxas de erros</th>
                    <th class="taxa-acerto">Taxa de acertos</th>
                </tr>
                <tr>
                    <td></td>
                    <td class="resolucao">10</td>
                    <td class="corretas">10</td>
                    <td class="erradas">5</td>
                    <td class="taxa-erro">5%</td>
                    <td class="taxa-acerto">10%</td>
                </tr>
                <tr>
                    <th><a href="/materia">Direito Constitucional</a></th>
                    <th class="resolucao">Resoluções</th>
                    <th class="corretas">Corretas</th>
                    <th class="erradas">Erradas</th>
                    <th class="taxa-erro">Taxas de erros</th>
                    <th class="taxa-acerto">Taxa de acertos</th>
                </tr>
                <tr>
                    <td></td>
                    <td class="resolucao">10</td>
                    <td class="corretas">10</td>
                    <td class="erradas">5</td>
                    <td class="taxa-erro">5%</td>
                    <td class="taxa-acerto">10%</td>
                </tr>
                <tr>
                    <th><a href="/materia">Direito Constitucional</a></th>
                    <th class="resolucao">Resoluções</th>
                    <th class="corretas">Corretas</th>
                    <th class="erradas">Erradas</th>
                    <th class="taxa-erro">Taxas de erros</th>
                    <th class="taxa-acerto">Taxa de acertos</th>
                </tr>
                <tr>
                    <td></td>
                    <td class="resolucao">10</td>
                    <td class="corretas">10</td>
                    <td class="erradas">5</td>
                    <td class="taxa-erro">5%</td>
                    <td class="taxa-acerto">10%</td>
                </tr>
                <tr>
                    <th><a href="/materia">Direito Constitucional</a></th>
                    <th class="resolucao">Resoluções</th>
                    <th class="corretas">Corretas</th>
                    <th class="erradas">Erradas</th>
                    <th class="taxa-erro">Taxas de erros</th>
                    <th class="taxa-acerto">Taxa de acertos</th>
                </tr>
                <tr>
                    <td></td>
                    <td class="resolucao">10</td>
                    <td class="corretas">10</td>
                    <td class="erradas">5</td>
                    <td class="taxa-erro">5%</td>
                    <td class="taxa-acerto">10%</td>
                </tr>
                
                
                
            </table>
        </div>
    </div>

</div>

</body>

</html>