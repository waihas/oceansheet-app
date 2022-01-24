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
						<h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">Privacy Policy</h1>
						<p class="text-sm md:text-base font-normal text-gray-600">Published 18 Junuary 2022</p>
			</div>


			<!--Post Content-->


			<h1 class="py-2 text-3xl font-sans">
				Confidentiality of information and privacy statement
			</h1>				

			<p class="py-6">
				OceanSheet appreciates your anxiety and concerns about the privacy of your data on the Internet.
				<br>
				We have therefore prepared this privacy policy page to help you understand the nature of the data that may be read when you visit our website and how we treat this personal data.
			</p>

			<h1 class="py-2 text-3xl font-sans">
				Navigation
			</h1>				

			<p class="py-6">
				OceanSheet is an official website subject to laws and intellectual property rights and was never created in order to collect your personal data from your computer while browsing our website, but only the data you provide will be used with your knowledge and of your own free will.
			</p>


			<h1 class="py-2 text-3xl font-sans">
				Links to other websites on the Internet
			</h1>				

			<p class="py-6">
				Our website may include links to other websites on the Internet. Or advertisements from other sites such as (Google AdSense) and we are not responsible for the methods of data collection by such websites, you can see the privacy policies and content of such website which are accessible through any link on their website.
				<br>
				We will not use third party advertising companies to serve ads when you visit our website. These companies are not permitted to use information about your visits to our website, while these websites may use information about your visit to other websites (except name, address, location, e-mail address or phone number) in order to provide advertisements about the products and services that interest you. We confirm that OceanSheet does not use any of these websites for advertising purposes.
			</p>

			<h1 class="py-2 text-3xl font-sans">
				Confidentiality of your personal files
			</h1>				

			<p class="py-6">
				OceanSheet is committed to maintaining the confidentiality and secrecy of all personal data it obtains at all times. This information will only be disclosed if required by law or when we believe in good faith that such a procedure will be required or desirable to comply with the law, or to defend or protect the property rights of this site or of its beneficiaries.
			</p>

			<h1 class="py-2 text-3xl font-sans">
				Presentation of the necessary data for the execution of the requested services
			</h1>				

			<p class="py-6">
				When requesting any of the OceanSheet's services, be aware that any information is necessary for the execution of legal procedures, we will ask you to provide them of your own free will. This information will help us contact you and respond to your inquiries where possible. The data you have submitted will never be sold to third parties for the purpose of marketing for its own interests without obtaining your prior written consent, unless this is done on the basis that it is in the collective data used for statistical and research purposes without including any data that can be used to identify you.
			</p>

			<h1 class="py-2 text-3xl font-sans">
				If you contact us
			</h1>				

			<p class="py-6">
				When you contact us, all data you provide to us is treated confidentially. Forms submitted online require the submission of data that will help us improve our website. The data you provide will be used to answer any questions, comments or requests from this website or any of our websites.
			</p>

			<h1 class="py-2 text-3xl font-sans">
				Disclosure of information to a third party
			</h1>				

			<p class="py-6">
				We do not sell, market, rent or disclose any information for the benefit of third parties outside of this website or its affiliated websites. Information will only be disclosed if an order is issued by a judicial or regulatory authority.
			</p>

			<h1 class="py-2 text-3xl font-sans">
				Changes to the confidentiality and information confidentiality policy
			</h1>

			<p class="py-6">
				We reserve the right to modify the terms and conditions of the Information Secrecy and Confidentiality Policy from time to time. Changes will be implemented here or on the main privacy policy page.
			</p>

			<h1 class="py-2 text-3xl font-sans">
				Contact us
			</h1>				

			<p class="py-6">
				You can contact us if necessary by clicking on the contact us link at the top of the page and within the links on our website or by sending to our email: contact@oceansheet.com.
			</p>

			<h1 class="py-2 text-3xl font-sans">
				Finally
			</h1>				

			<p class="py-6">
				Your anxieties and concerns about data secrecy and privacy are of critical importance for us, we hope that this will be achieved through this policy.
			</p>

	</div>
	</div>
	<!--/container-->
</template>

<script>
export default {
  name: 'PrivacyPolicy',
  layout: 'basic',
  metaInfo () {
    return { title: this.$t('Privacy Policy') }
  },
}
</script>

<style scoped>

</style>
