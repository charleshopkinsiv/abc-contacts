

<table class="table mt-5">
    <thead>
        <tr>
            <th scope="col">F. Name</th>
            <th scope="col">L. Name</th>
            <th scope="col">Title</th>
            <th scope="col">Suffix</th>
            <th scope="col">Phone : Type</th>
            <th scope="col">Email</th>
            <th scope="col">Date Added</th>
            <th scope="col"></th>
        </tr>
    </thead>

    <tbody>

        <?php foreach($data['contacts'] as $contact) : ?>

            <tr>
                <th scope="col"><?php echo $contact['first_name']; ?></th>
                <th><?php echo $contact['last_name']; ?></th>
                <td><?php echo $contact['title']; ?></td>
                <td><?php echo $contact['suffix']; ?></td>
                <td><?php echo $contact['number']; ?> : <?php echo $contact['type']; ?></td>
                <td><?php echo $contact['email']; ?></td>
                <td><?php echo $contact['date_created']; ?></td>
                <td class="text-end">
                    <a href="/edit.php?edit_id=<?php echo $contact['id']; ?>" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></a>
                    <button onclick="deleteContact(<?php echo $contact['id']; ?>)" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i></button>
                </td>
            </tr>

        <?php endforeach; ?>

    </tbody>
</table>