<h1>Uso de vistas en Plantillero</h1>
<p>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic exercitationem corporis nihil error ullam, repellendus consectetur illum veritatis excepturi dolor, tempore quibusdam aspernatur facere recusandae assumenda reprehenderit sequi modi fugiat.
</p>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Mensaje</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                {{nombre}}
            </td>
            <td>
                {{mensaje}}
            </td>
        </tr>
    </tbody>
    <section>
        {{foreach pulseras}}
        <div>
            <strong> {{sku}} {{nombre}} {{precio}} </strong>
        </div>
        {{endfor pulseras}}
    </section>
</table>