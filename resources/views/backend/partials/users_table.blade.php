<table class="table table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>E-emal</th>
			<th>Role</th>
			<th>Seen</th>
			<th>Valid</th>
			<th>Confirmed</th>
			<th>Edit</th>
			<th>Delet</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td>
					{{ $user->id}}
				</td>
				<td>
					{{ $user->firstname}}
				</td>
				<td>
					{{ $user->lastname}}
				</td>
				<td>
					<a href="{{ route('backend.users.edit', $user->id) }}">{{ $user->username }}</a>
				</td>
				<td>
					{{ $user->email }}
				</td>
				<td>
					{{ $user->role_id }}
				</td>
				<td>
					 <input type="checkbox" value="">
				</td>
				<td>
					<input type="checkbox" value="">
				</td>
				<td>
					<input type="checkbox" value="">
				</td>
				<td>
					<a href="{{ route('backend.users.edit', $user->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
				</td>
				<td>
					<a href="{{ route('backend.users.confirm', $user->id) }}"><spane class="glyphicon glyphicon-remove"></spane></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
{!! $users->render() !!}