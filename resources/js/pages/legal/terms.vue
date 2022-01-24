<template>
  <!--Container-->
	<div class="container w-full md:max-w-3xl mx-auto pt-20">

		<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

			<!--Title-->
			<div class="font-sans">
				<p class="text-base md:text-sm text-green-500 font-bold">
          &lt; <router-link :to="{name: 'welcome'}" class="text-base md:text-sm text-green-500 font-bold no-underline hover:underline">BACK TO HOME
          </router-link>
          </p>
						<h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">Terms & Conditions</h1>
						<p class="text-sm md:text-base font-normal text-gray-600">Published 18 Junuary 2022</p>
			</div>


		<p class="py-6">
			The obligation to register the name, data and personal information (work data and address) and means of communication (phone number and e-mail).
		</p>
		<p class="py-6">
			Commitment to free the content of your site from any materials or phrases that offend religions, Islamic law, morals and social norms, or those that violate public decency, or call for sedition and sectarian strife.
		</p>
		<p class="py-6">
			Refrain from uploading any files that contain viruses or harmful software with the aim of stealing information, sabotaging or violating the privacy of other customers or in an illegal manner, and violating this clause leads to the final closure of the website and the immediate revocation of the license.
		</p>
		<p class="py-6">
			It is forbidden to send violating or harassing messages through mailing lists without the knowledge or consent of their owners, as well as prohibiting all kinds of mail dumping as these practices violate internationally applicable laws and require the immediate suspension of your site.
		</p>
		<p class="py-6">
			In the event that the data transfer rate exceeds the specified and agreed upon quantity upon requesting the service, the site will be stopped automatically until the beginning of the next month. (Monitoring the monthly data transfer volume is done through the customer's control panel, and you may upgrade at any moment to a higher plan easily by contacting technical support).
		</p>
		<p class="py-6">
			Technical support is responsible for fixing the problems that are caused by the server only, God forbid, and we are not obligated to fix or amend errors and problems resulting from your misuse or misuse of your visitors to the content of your website.
		</p>
		<p class="py-6">
			Removing Waihas website logo from our products or services, especially software and designs, requires legal accountability under the law of property and intellectual rights, with the exception of purchasing the copyrights to pay fees from the value of the work or product sold.
		</p>
		<p class="py-6">
			The prices of the plans and services provided by Waihas are subject to change according to market variables at any time, without affecting the previous purchases of the amendment, as the customer has the right to deal with the previous price until the end of the prepaid subscription period.
		</p>
		<p class="py-6">
			The customer’s failure to fulfill his financial obligations towards one of the services leads to the cessation of all his dealings with Waihas until the full payment of dues.
		</p>
		<p class="py-6">
			Waihas is committed to ensuring the security of your website and protecting its content from leakage and penetration even when the website is stopped.
		</p>
		<p class="py-6">
			Once you register on our website, you fully agree to the privacy policy, terms of use and refund policy, also once you purchase means that you have examined and read the service or product specifications well, and there is no refund once the service or product is received.
		</p>
		<p class="py-6">
			Failure to comply with the terms of the agreement necessitates warning, then warning, and then taking the measures stipulated in this agreement.
		</p>
		<p class="py-6">
			Also, in the event of a negative evaluation for the purpose of tarnishing our reputation or defamation, your license will be suspended completely.
		</p>
		<p class="py-6">
			We are the full decision-makers and we do not accept mediation or external intervention to solve problems, if any, and in the event that this occurs exposes you to a fine, and you have no right to object to the final decision taken.
		</p>
		<p class="py-6">
			The services or products provided to you are for personal use only and you are not authorized to resell them, so when this matter is violated, you will be alerted or your license suspended without warning.
		</p>
		<p class="py-6">
			In the event that a PayPal dispute is opened or an attempt is made to recover the money, your license will be suspended immediately and all your services will be lost, so if you have a problem, please contact us first.
		</p>
		<p class="py-6">
			The services or products provided by us work on one domain only of your choice, and each additional domain has a cost starting from $ 30 for each additional domain.
		</p>
		<p class="py-6 pt-12">
			Waihas always committed to quality, efficiency and customer satisfaction, so your successes are our real profits.
		</p>

	</div>
	</div>
	<!--/container-->
</template>

<script>
export default {
  name: 'Terms',
  layout: 'basic',
  metaInfo () {
    return { title: this.$t('Terms & Conditions') }
  },
}
</script>

<style scoped>

</style>
