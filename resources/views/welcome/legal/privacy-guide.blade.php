@extends('welcome.layouts.basic')
@section('title', 'Privacy and data protection guide')

@section('stylesheets')
@endsection

@section('content')

	<div class="container w-full md:max-w-3xl mx-auto pt-20">
		<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
			<!--Title-->
			<div class="">
				<h1 class="font-bold  break-normal text-main-900 pt-6 pb-2 text-3xl md:text-4xl">
					OceanSheet’s privacy and data protection guide
				</h1>
			</div>

			<!--Page Content-->
			<div class="my-12 text-gray-600">
				<h1 class="py-2 text-3xl text-gray-800">
					What is the GDPR?
				</h1>
				<p class="py-6">
					The GDPR is a European Union regulation that establishes a new framework for handling and protecting the personal data of EU-based residents. It came into effect on May 25th, 2018 to build upon and modernize existing EU Data Protection and Privacy rules and it replaced them with one single set of rules which govern how personal information is collected and processed. It also specifically addresses the export of personal data of EU citizens outside the EU, and sets clear guidelines for companies who operate between the EU and other global markets with different legal structures and approaches to data transfer and its commercial use. It aims to strengthen personal data protection in Europe, and impacts the way we all do business.
					<br><br>
					The GDPR lays out specific requirements for businesses and organizations who are established in Europe or who serve users in Europe. Among other things, it: Regulates how businesses can collect, use, and store personal data; Builds upon current documentation and reporting requirements to increase accountability; Authorizes fines on businesses who fail to meet its requirements. We’re sure you have many questions, and we’re here to help. OceanSheet takes a customer-centric approach on data protection, control, and compliance, and we want to be a key facilitator on your GDPR journey.
					<br><br>
					Compliance with the GDPR is a top priority for OceanSheet and our customers. OceanSheet's Legal, Privacy and Security teams have carefully analyzed the GDPR and have undertook the necessary steps to ensure that we comply, we met the requirements of the GDPR. Of course, every organization’s journey to GDPR compliance is different. It depends on, among other factors, company size, the types and amount of data it processes, and its current security and privacy measures.
				</p>

				<h1 class="py-2 text-3xl text-gray-800">
					What are your obligations under the GDPR?
				</h1>
				<p class="py-6">
					It is important to remember that you, as the user and the data controller, have specific legal obligations under the GDPR. ​​You should be confident that any providers (data processors) which you work with have a highly robust approach to data protection, understand the obligations of the GDPR, and are well prepared to meet them.
					<br><br>
					The GDPR does not impose a requirement for personal data to remain within the EU. In fact, the GDPR permits the transfer of personal data to non-EU countries in line with a number of recognized methods, including standard contractual clauses and frameworks such as the EU-US Privacy Shield. Under GDPR data can be hosted and processed in non-EU countries as long as you, or your providers who transfer data on your behalf, have one of the necessary transfer mechanisms in place.
					<br><br>
					<a href="{{route('legal.privacy')}}">OceanSheet's Privacy Policy</a> sets out our approach to working together to keep your data secure and helps make clear OceanSheet's responsibilities and our customers’ responsibilities.
				</p>

				<h1 class="py-2 text-3xl text-gray-800">
					GDPR: Key changes
				</h1>
				<p class="py-6">
					The GDPR brings with it a shift in mindset. It expressly introduces several principles that previously underpinned data protection law, such as the “accountability principle” and “privacy by design,” and encourages organizations to take more responsibility for protecting the personal data they handle.
					<br><br>
					1. <span class="text-gray-900">Privacy by design:</span> This means that organizations handling personal data need to think about data protection when designing systems, not just review privacy implications after a product or process is developed. If you process a lot of data or deal with sensitive information, in many cases you’ll also need to conduct data protection impact assessments to meet the privacy by design principle.
					<br><br>
					2. <span class="text-gray-900">User rights:</span> The GDPR expands the existing set of user rights and creates several entirely new rights. Companies should review and ensure they have effective systems in place to give effect to these rights.
					<br><br>
					3. <span class="text-gray-900">Tougher breach notification rules:</span> Under the GDPR, organizations are required to have a strong breach notification system in place and understand their specific reporting obligations.
					<br><br>
					4. <span class="text-gray-900">Accountability:</span> Not only must your company adhere to the principles set out in the GDPR, but you must also demonstrate that compliance in line with the principle of accountability. This requires a comprehensive and clear internal privacy governance structure.
					<br><br>
					5. <span class="text-gray-900">Data protection officer:</span> The GDPR requires companies that engage in processing of EU user data to determine if they should appoint a Data Protection Officer. Companies that routinely process large volumes of information or particularly sensitive information should consider appointing a DPO.
				</p>

				<h1 class="py-2 text-3xl text-gray-800">
					Getting ready for the GDPR
				</h1>
				<h2 class="py-2 text-2xl text-gray-800">
					Your road to GDPR compliance
				</h2>
				<p class="py-6">
					OceanSheet has met the requirements of the GDPR. However you should also be working to assess your readiness now that the deadline has passed. Personal data plays a huge part in society and the economy. It is essential that people have—and know they have—control and clarity over how their data is used and protected by any organization they interact with, and that organizations are given clear guidelines to protect their personal data. Organizations established in the EU and processing personal data of EU-based individuals are required to comply with the GDPR since May 25, 2018. The GDPR updates and harmonizes the framework for processing personal data in the European Union, and brings with it new obligations for organizations and new rights for individuals. Many organizations, large and small, are now prepared for the new regulation.
				</p>
				<h2 class="py-2 text-2xl text-gray-800">
					What you can do
				</h2>
				<h3 class="py-2 text-xl text-gray-800">
					What are your responsibilities as a customer?
				</h3>
				<p class="py-6">
					OceanSheet customers will typically act as the data controller for any personal content they provide to OceanSheet via their use of OceanSheet services. The data controller determines the purposes and means of processing personal data. Then there’s the data processor. That’s typically us. As a data processor, OceanSheet processes personal data on behalf of the data controller when the controller is using the G Suite Add-on, Google Sheets Add-on or OceanSheet Web Platform.
				</p>
				<h3 class="py-2 text-xl text-gray-800">
					What is a data controller?
				</h3>
				<p class="py-6">
					Data controllers are responsible for implementing appropriate technical and organisational measures to ensure and demonstrate that any data processing is performed in compliance with the GDPR. Controllers’ obligations relate to principles such as lawfulness, fairness and transparency, purpose limitation, data minimisation, and accuracy, as well as fulfilling data subjects’ rights with respect to their data.
					<br><br>
					You can find guidance related to your responsibilities under the GDPR, by regularly checking your national or lead data protection authority websites and publications by privacy associations such as the European Data Protection Officers (EUDPO) We will also ensure that this GDPR page and our GDPR Resource Center are updated with the latest news and updates.
					<br><br>
					This site is intended to help our customers better understand OceanSheet's GDPR stance. We recommend that you consult with a legal expert to obtain guidance on the specific requirements applicable to your organization, as this site does not constitute legal advice.
				</p>
				<h3 class="py-2 text-xl text-gray-800">
					Where should you start?
				</h3>
				<p class="py-6">
					As a customer of OceanSheet, GDPR should be a part of your data protection compliance strategy. Consider these tips:
					<br><br>
					<ul class="list-disc">
						<li>Familiarize yourself with the provisions of the GDPR</li>
						<li>Create an updated inventory of personal data that you handle. You can use some of our tools to help identify and classify data.</li>
						<li>Review your current controls, policies, and processes for managing and protecting data with the GDPR’s requirements. Find the gaps and create a plan to address them.</li>
						<li>Consider how you can leverage the existing data protection features on OceanSheet as part of your own regulatory compliance framework</li>
						<li>We recommend you to seek independent legal advice or to ask your national data protection authority to determine the appropriate measures for your organization.</li>
					</ul>
				</p>

				<h1 class="py-2 text-3xl text-gray-800">
					OceanSheet is GDPR ready
				</h1>
				<p class="py-6">
					We’re committed to protecting your personal data. Like many of our customers, at OceanSheet we actively prepared for the GDPR.
					<br><br>
					At OceanSheet, trust is the foundation of our relationship with thousands of people and businesses around the world. Respect for privacy and security was built into our business from the beginning. As we’ve grown, our focus on handling and protecting the data our customers entrust to us has remained a top priority.
					<br><br>
					We have dedicated privacy experts designing and maintaining our privacy program and policies to help safeguard your data in line with the requirements of the GDPR and CCPA. Our Legal, Privacy and Security teams have carefully scrutinized the GDPR, and have taken the necessary steps to identify where we need to comply and where any changes need to be made. We achieved full compliance before May 2018, and are committed to helping our customers prepare for their obligations.
				</p>
				<h2 class="py-2 text-2xl text-gray-800">
					How does OceanSheet comply with the GDPR?
				</h2>
				<p class="py-6">
					Among other things, data controllers are required to only use data processors that provide sufficient guarantees to implement appropriate technical and organizational measures in such a manner that processing will meet the requirements of the GDPR. When conducting your assessment of OceanSheet services, you may want to consider the following:
				</p>
				<h3 class="py-2 text-xl text-gray-800">
					Expert Knowledge, Reliability & Resources
				</h3>
				<h4 class="py-2 text-lg text-gray-800">
					Data Protection Expertise
				</h4>
				<p class="py-6">
					OceanSheet employs security and privacy professionals that include some of the world’s foremost experts in information, application, and network security. This expert team is tasked with maintaining the company’s defense systems, developing security review processes, building stronger security infrastructure, and precisely implementing OceanSheet's security policies. OceanSheet also employs an extensive team of lawyers, regulatory compliance experts, and public policy specialists who look after privacy and security compliance for OceanSheet. These teams work with customers, industry stakeholders, and supervisory authorities to ensure our OceanSheet services can help customers meet their compliance needs.
				</p>
				
				<h3 class="py-2 text-xl text-gray-800">
					Data Protection Commitments
				</h3>
				<h4 class="py-2 text-lg text-gray-800">
					Data Processing Agreements
				</h4>
				<p class="py-6">
					Our data processing agreements for OceanSheet clearly articulate our privacy commitment to customers. We have evolved these terms over the years based on feedback from our customers and regulators.
					<br><br>
					More recently, we have specifically updated these terms to reflect the GDPR, and have made these updated available well in advance of the entry into force of the GDPR to facilitate our customers’ compliance assessment and GDPR readiness when using OceanSheet Cloud services.
				</p>

				<h4 class="py-2 text-lg text-gray-800">
					Processing According to Instructions
				</h4>
				<p class="py-6">
					Any data that a customer and its users put into our systems will only be processed in accordance with the customer’s instructions, as described in our GDPR-updated data processing agreements and Privacy Policy.
				</p>

				<h4 class="py-2 text-lg text-gray-800">
					Personnel Confidentiality Commitments
				</h4>
				<p class="py-6">
					All OceanSheet employees are required to sign a confidentiality agreement and complete mandatory confidentiality and privacy trainings, as well as our Code of Conduct training. OceanSheet's Code of Conduct specifically addresses responsibilities and expected behavior with respect to the protection of information.
				</p>

				<h3 class="py-2 text-xl text-gray-800">
					Use of Subprocessors
				</h3>
				<p class="py-6">
					OceanSheet engage some third-party vendors to assist in supporting these services. Each vendor goes through a rigorous selection process to ensure it has the required technical expertise and can deliver the appropriate level of security and privacy.
					<br><br>
					We make information available about OceanSheet subprocessors supporting OceanSheet services, as well as third-party subprocessors involved in those services, and we include commitments relating to subprocessors in our data processing agreements and our Privacy Policy.
				</p>

				<h3 class="py-2 text-xl text-gray-800">
					Security of the Services
				</h3>
				<p class="py-6">
					According to the GDPR, appropriate technical and organisational measures shall be implemented to ensure a level of security appropriate to the risk.
					<br><br>
					OceanSheet operates a global infrastructure designed to provide state-of-the-art security through the entire information processing lifecycle. This infrastructure is built to provide secure deployment of services, secure storage of data with end-user privacy safeguards, secure communications between services, secure and private communication with customers over the Internet, and safe operation by administrators. OceanSheet run on this infrastructure.
					<br><br>
					We designed the security of our infrastructure in layers that build upon one another, from the physical security of data centers, to the security protections of our hardware and software, to the processes we use to support operational security. This layered protection creates a strong security foundation for everything we do.
				</p>

				<h3 class="py-2 text-xl text-gray-800">
					Availability, Integrity & Resilience
				</h3>
				<p class="py-6">
					OceanSheet designs the components of our platform to be highly redundant. OceanSheet's data centers are geographically distributed to minimize the effects of regional disruptions on global products such as natural disasters and local outages. In the event of hardware, software, or network failure, services are automatically and instantly shifted from one facility to another so that operations can continue without interruption. Our highly redundant infrastructure helps customers protect themselves from data loss.
				</p>

				<h3 class="py-2 text-xl text-gray-800">
					Testing
				</h3>
				<p class="py-6">
					OceanSheet conducts disaster recovery testing on an annual basis to provide a coordinated venue for infrastructure and application teams to test communication plans, fail-over scenarios, operational transition, and other emergency responses. All teams that participate in the disaster recovery exercise develop testing plans and post mortems which document the results and lessons learned from the tests.
				</p>

				<h3 class="py-2 text-xl text-gray-800">
					Encryption
				</h3>
				<p class="py-6">
				OceanSheet uses encryption to protect data in transit and at rest. Data in transit is protected using HTTPS, which is activated by default for all users. OceanSheet services encrypt customer content stored at rest, without any action required from customers, using one or more encryption mechanisms.
				</p>

				<h3 class="py-2 text-xl text-gray-800">
					Access Controls
				</h3>
				<p class="py-6">
					For OceanSheet employees, access rights and levels are based on job function and role, using the concepts of least-privilege and need-to-know to match access privileges to defined responsibilities. Requests for additional access follow a formal process that involves a request and an approval from a data or system owner, manager, or other executives, as dictated by OceanSheet's security policies.
				</p>

				<h3 class="py-2 text-xl text-gray-800">
					Vulnerability Management
				</h3>
				<p class="py-6">
					We scan for software vulnerabilities using a combination of commercially available and purpose-built in-house tools, intensive automated and manual penetration testing, quality assurance processes, software security reviews, and external audits.
				</p>

				<h2 class="py-2 text-2xl text-gray-800">
					Data Return & Deletion
				</h2>
				<p class="py-6">
					Document Owners can export customer data, via the functionality of the OceanSheet services (consult OceanSheet documentation for further information), at any time during the term of the agreement. We have included data export commitments in our data processing terms for years, and updated them to reflect the GDPR. We are continuously working to enhance the robustness of the data export capabilities and make it even easier to download a copy of your business’ data securely from OceanSheet services.
					<br><br>
					You can also delete customer data, via the functionality of the OceanSheet services, at any time. When OceanSheet receives a complete deletion instruction from you, OceanSheet will delete the relevant customer data from all of its systems unless retention obligations apply.
				</p>

				<h2 class="py-2 text-2xl text-gray-800">
					Assistance to the Controller
				</h2>
				<h3 class="py-2 text-xl text-gray-800">
					Data Subject’s Rights
				</h3>
				<p class="py-6">
					Data controllers can use OceanSheet administrative consoles and services functionality to help access, rectify, restrict the processing of, or delete any data that they and their users put into our systems. This functionality will help them fulfill their obligations to respond to requests from data subjects to exercise their rights under the GDPR.
				</p>
				<h3 class="py-2 text-xl text-gray-800">
					Data Protection Team
				</h3>
				<p class="py-6">
					OceanSheet has designated a DPO, to cover data processing subject to the GDPR. European Data Protection Officers, S.L., represented by Mr. Carlos Mateo Enseñat will serve as OceanSheet's Data Protection Officer.
					<br><br>
					Where required, OceanSheet have designated teams to address customer inquiries in relation to data protection. The way to contact these teams is described in OceanSheet's Privacy Policy.
				</p>
				<h3 class="py-2 text-xl text-gray-800">
					Incident Notifications
				</h3>
				<p class="py-6">
					OceanSheet has provided contractual commitments around incident notification for many years. We will continue to promptly inform you of incidents involving your customer data in line with the data incident terms in our GDPR-updated agreements and terms.
				</p>
				<h3 class="py-2 text-xl text-gray-800">
					International Data Transfers
				</h3>
				<p class="py-6">
					The GDPR provides for several mechanisms to facilitate transfers of personal data outside of the EU. These mechanisms are aimed at confirming an adequate level of protection or ensuring the implementation of appropriate safeguards when personal data is transferred to a third country. Appropriate safeguards can be provided for by model contract clauses. An adequate level of protection can be confirmed by adequacy decisions such as the ones that supports the EU-U.S. Privacy Shields. We contractually commit under our current data processing agreements to maintain a mechanism that facilitates transfers of personal data outside of the EU as required by the GDPR. We have also gained confirmation of compliance from European Data Protection Authorities for our model contract clauses, affirming that our contractual commitments for OceanSheet fully meet the requirements to legally frame transfers of personal data from the EU to the rest of the world.
				</p>

				<h1 class="py-2 text-3xl text-gray-800">
					How does OceanSheet help me comply?
				</h1>
				<p class="py-6">
					OceanSheet not only complies with GDPR and CCPA, but also provides tools and documentation to support your GDPR accountability. For example, OceanSheet allows you to implement an effective access control and access record, only the staff who really need to access the data will have access to said data and of course they will not be transferred to third parties if this transfer is not necessary, mandatory or is not explicitly informed and consented by the interested party.
					<br><br>
					Avoid copy-paste and stop emailing different versions of the same spreadsheet. Use OceanSheet and take back control of your data.
					<br><br>
					We hope you see value in these changes as we continue to improve your OceanSheet experience and in a way that meets our commitment as a company, a commitment to defending and protecting your privacy.
				</p>

				<h1 class="py-2 text-3xl text-gray-800">
					California Consumer Privacy Act (CCPA)
				</h1>
				<h2 class="py-2 text-2xl text-gray-800">
					CCPA overview
				</h2>
				<p class="py-6">
					The California Consumer Privacy Act (CCPA) is the first comprehensive privacy law in the United States. It provides a variety of privacy rights to California consumers. Businesses regulated by the CCPA will have a number of obligations to those consumers, including disclosures, General Data Protection Regulation (GDPR)-like consumer data subject rights (DSRs), an ‘opt-out’ for certain data transfers, and an ‘opt-in’ requirement for minors.
					<br><br>
					The CCPA only applies to companies doing business in California which satisfy one or more of the following: (1) have a gross annual revenue of more than $25 million, or (2) derive more than 50% of their annual income from the sale of California consumer personal information, or (3) buy, sell or share the personal information of more than 50,000 California consumers annually.
					<br><br>
					The CCPA went into effect on January 1, 2020. However, enforcement by the California Attorney General (AG) started on July 1, 2020.
					<br><br>
					The California AG will enforce the CCPA and will have power to issue non-compliance fines. The CCPA also provides a private right of action which is limited to data breaches. Under the private right of action, damages can come in between $100 and $750 per incident per consumer. The California AG also can enforce the CCPA in its entirety with the ability to levy a civil penalty of not more than $2,500 per violation or $7,500 per intentional violation.
				</p>
				<h2 class="py-2 text-2xl text-gray-800">
					OceanSheet and CCPA
				</h2>
				<p class="py-6">
					For commercial customers doing business in California, OceanSheet will be acting as a ‘service provider’ with respect to our Online Services and Professional Services offering. The terms of our Privacy Policy and the OceanSheet's Data Protection Addendum (DPA) already meet the requirements for Service Providers under the CCPA and are generally sufficient to permit customers to continue to use our Services. As such, no additional contractual changes are required for customers to be able to rely on OceanSheet as a Service Provider under the CCPA.
					<br><br>
					As set out in our Terms of Use and Privacy Policy, OceanSheet complies with all laws and regulations applicable to its provision of the Online Services, which would include the CCPA.
				</p>
				<h2 class="py-2 text-2xl text-gray-800">
					How will the CCPA affect my company?
				</h2>
				<p class="py-6">
					Many of the CCPA’s rights afforded to Californians are similar to the rights the GDPR provides, including the disclosure and data subject right (DSR) requests, such as access, deletion, and portability. As such, customers can look to our already existing GDPR solutions to help them with their CCPA compliance.
					<br><br>
					To begin your CCPA journey you should focus on Discovery of information, determining how personal information is shared, governing how it is used, how it is protected and having a formal data breach response program in place.
				</p>
				<h2 class="py-2 text-2xl text-gray-800">
					What are the differences between GDPR and CCPA?
				</h2>
				<p class="py-6">
					There are many differences. It’s easier to focus on the similarities, including:
					<br><br>
					<ul class="list-disc">
						<li>Transparency/disclosure obligations;</li>
						<li>Consumer rights to access, delete; and receive a copy of data,</li>
						<li>Definition of ‘service providers’ that is similar to how GDPR defines “processors” with a similar contractual obligation, and</li>
						<li>Definition of “businesses” that encompasses the GDPR definition of “controllers”.</li>
					</ul>
					<br><br>
					The biggest difference in CCPA is the core requirement to enable an opt-out from sales of data to third parties (with ‘sale’ broadly defined to include sharing of data for valuable consideration).
				</p>
				<h2 class="py-2 text-2xl text-gray-800">
					What rights must companies enable under the CCPA?
				</h2>
				<p class="py-6">
					The CCPA requires regulated businesses that collect, transfer, and sell personal information to, among other things:
					<br><br>
					<ul class="list-disc">
						<li>Provide disclosures to consumers, prior to collection, regarding the categories and purposes of collection.</li>
						<li>Provide more detailed disclosures in a privacy policy regarding the sources, business purposes, and categories of personal information that is collected, including how those categories are sold or transferred to other entities.</li>
						<li>Enable DSR rights of access, deletion, and portability for the specific pieces of personal information that has been collected by you.</li>
						<li>Enable a control that will permit consumers to opt out of the sale of the consumer’s data. However, transfers to exempt entities, such as service providers, will be permitted.</li>
						<li>For minors, under 16, enable an opt-in process so that no sale of the minor’s personal information can occur without actively opting-in to the sale.</li>
						<li>Ensure that consumers are not discriminated against for exercising any of their rights under CCPA.</li>
					</ul>
					<br><br>
					The biggest difference in CCPA is the core requirement to enable an opt-out from sales of data to third parties (with ‘sale’ broadly defined to include sharing of data for valuable consideration).
				</p>
				<h2 class="py-2 text-2xl text-gray-800">
					How does the CCPA apply to children?
				</h2>
				<p class="py-6">
					CCPA introduces parental consent obligations consistent with The Children’s Online Privacy Protection Act (COPPA) for children under the age of 13.
					<br><br>
					For children between 13 and 16 years old, CCPA imposes a new obligation to obtain opt-in consent from the child.
				</p>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
@endsection