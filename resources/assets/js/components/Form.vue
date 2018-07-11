<template>
	<form @submit.prevent="submit()"
		id="form" method="POST">
		<div class="row gtr-uniform gtr-50">
			<div class="col-6 col-12-xsmall">
				<input type="text" name="name" id="name" value="" placeholder="Name" />
			</div>
			<div class="col-6 col-12-xsmall">
				<input type="email" name="email" id="email" value="" placeholder="Email" />
			</div>
			<div class="col-12">
				<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
			</div>
			<div class="col-12 pull-right right">
				<ul class="actions">
					<li class="a-margin-l">
						<button type="submit" class="button primary">
							<i class="fa fa-paper-plane"></i>
							Send Message
						</button>
					</li>
				</ul>
			</div>
		</div>
	</form>
</template>

<script>
export default
{
	props: [
		'submiturl',
	],

	data()
	{
		return {
			loading: false,
		}
	},

	mounted()
	{
		this.init();
	},

	methods:
	{
		init()
		{

		},

		submit()
		{
			if(this.loading) return;

			this.loading = true;

			const data = $('#form').serialize();

			axios.post(this.submiturl, data)
			.then(response => {
				this.loading = false;
			}).catch(error => {
				this.loading = false;
			});
		}
	},
}
</script>