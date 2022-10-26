<template>
	<NcContent app-name="userbook">
		<NcAppNavigation :class="{'icon-loading': loading}">
			<template #list>
				<NcAppNavigationItem :title="t('userbook', 'App Nav 1')"
					:exact="true"
					to="/">
					<template #icon>
						<CalendarIcon :size="20" />
					</template>
				</NcAppNavigationItem>
			</template>
			<template #footer>
				<NcAppNavigationSettings :title="t('userbook', 'Deck settings')">
					settings!
				</NcAppNavigationSettings>
			</template>
		</NcAppNavigation>
		<NcAppContent>
			<router-view />
		</NcAppContent>

		<router-view name="sidebar" :visible="true" />
	</NcContent>
</template>

<script>
import { NcAppNavigation, NcAppNavigationItem, NcAppNavigationSettings, NcContent, NcAppContent } from '@nextcloud/vue'

export default {
	name: 'App',
	components: {
		NcAppNavigation,
		NcAppNavigationItem,
		NcAppNavigationSettings,
		NcContent,
		NcAppContent,
	},
	data() {
		return {
			updating: false,
			loading: true,
		}
	},
	computed: {},

	async mounted() {
		this.loading = false
	},

	methods: {},
}
</script>
<style scoped>
	#app-content > div {
		width: 100%;
		height: 100%;
		padding: 20px;
		display: flex;
		flex-direction: column;
		flex-grow: 1;
	}
</style>
