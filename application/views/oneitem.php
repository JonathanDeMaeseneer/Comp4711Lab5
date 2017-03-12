<tr>
        <!-- 
        We have a view fragment to show a single item in the task list, oneitem.
        Let's make a comparable one to show for an owner, the only difference 
        being that the ID should be shown as a link to Mtce::edit.
        -->
        <td><a href="/mtce/edit/{id}"><input type="button" value="{id}"/></a></td>
        <td>{task}</td>
        <td>{status}</td>
</tr>