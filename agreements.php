<?php
include('includes/db.php');
include('includes/header.php');
?>
		<div class="ui container full-basic-segment">
			<div class="ui grid">
				<div class="one column row">
					<div class="column centered aligned">
						<!--PLACEHOLDER POLICY, UPDATE-->
						<?php 
							if (!isset($_GET["policy"])){
								?>
									<h3>Policies & Agreements</h3>
									<ul>
										<li><a href="agreements.php?policy=terms">Terms of Use</a></li>
										<li><a href="agreements.php?policy=privacy">Privacy Policy</a></li>
										<li><a href="agreements.php?policy=return">Return Policy</a></li>
										<li><a href="agreements.php?policy=shipping">Shipping Policy</a></li>
									</ul>
								<?php
							} else {
								if ($_GET["policy"] == "terms"){
									?>
										<h1 class="ui center aligned header">Terms of Use</h1>
										<h6 class="ui center aligned header"><a href="agreements.php">Other Policies</a></h6>
										<p>This website and/or its mobile sites and applications (the “Site”) is owned and operated by Boujee Bin, LLC and/or its subsidiaries or affiliates (“Boujee Bin”). These Terms of Use (“Terms of Use”) apply to your use of this Site. Any membership you may establish on the Site and/or the purchase or use of any products or services available through this Site are governed by the Terms of Membership (“Terms of Membership”) on the relevant Boujee Bin website, which is incorporated herein by reference. Additionally, your use of this Site is governed by the Privacy Notice, which is incorporated herein by reference.</p>
	
										<p>Throughout the Site, the terms “we,” “us” and “our” refer to Boujee Bin. Boujee Bin offers this Site, including all information, tools and services available on this Site, to you, the user, conditioned upon your acceptance of these Terms of Use.  Your continued use of this Site constitutes your agreement to these Terms of Use. If you do not wish to be bound by these Terms of Use, please do not use this Site.</p>
	
										<h2>Data Integrity</h2>
										<p>You represent that all of the information, data and other materials you provide on this Site or to Boujee Bin through any other means are true, accurate, current and complete. You are responsible for updating and correcting the information you have provided on this Site, as appropriate.</p>
	
										<h2>Privacy Notice</h2>
										<p>A copy of the Privacy Notice that applies to the collection, use, disclosure and other processing of personal information on this Site is located at Boujee Pin Privacy Notice. You consent to any personal information we obtain about you (either via this Site, by email, telephone or any other means) being collected, stored and otherwise processed in accordance with the terms of the Privacy Notice.</p>
	
										<h2>License & Site Access</h2>
										<p>All content available through this Site (including, without limitation, text, design, graphics, logos, icons, images, audio clips, downloads, interfaces, code and software, as well as the selection and arrangement thereof) is the exclusive property of and owned by Boujee Bin, its licensors or its content providers, and is protected by copyright, trademark and other applicable U.S. and foreign laws.</p>
	
										<p>Boujee Bin grants you a limited license to access and make personal use of this Site. Unless indicated to the contrary, you may access, copy, download and print the content available on this Site for your personal, non-commercial use, provided you do not modify or delete any copyright, trademark or other proprietary notices that appear in the content. Boujee Bin or its licensors or content providers retain full and complete title to the content available on the Site, including all associated intellectual property rights, and provide this content to you under a license that is revocable at any time in Boujee Bin’s sole discretion. Boujee Bin strictly prohibits any other use of any content available through the Site, including but not limited to:</p>
	
										<ul>
											<li>any downloading, copying or other use of the content or the Site for purposes competitive to Boujee Bin or for the benefit of another vendor or any third party;</li>
											<li>any caching, unauthorized linking to the Site or the framing of any content available on the Site;</li>
											<li>any modification, distribution, transmission, performance, broadcast, publication, uploading, licensing, reverse engineering, transfer or sale of, or the creation of derivative works from, any content, products or services obtained from the Site that you do not have a right to make available (such as the intellectual property of another party);</li>
											<li>any uploading, posting or transmitting of any material that contains software viruses or any other computer code, files or programs designed to interrupt, destroy or limit the functionality of any computer;</li>
											<li>using any hardware or software intended to surreptitiously intercept or otherwise obtain any information (such as system data or personal information) from the Site (including, but not limited to the use of any “scraping” or other data mining techniques, robots or similar data gathering and extraction tools); or</li>
											<li>any action that imposes or may impose (in Boujee Bin’s sole discretion) an unreasonable or disproportionately large load on Boujee Bin’s infrastructure, or damage or interfere with the proper working of our infrastructure.</li>
										</ul>
										
										<p>You are responsible for obtaining access to the Site, and that access may involve third-party fees (such as Internet service provider or airtime charges). In addition, you must provide and are responsible for all equipment necessary to access the Site. You may not bypass any measures that have been implemented to prevent or restrict access to this Site. Any unauthorized access to the Site by you (including any such access or use that involves in any way an account you may establish on the Site or any device you may use to access the Site) shall terminate the permission or license granted to you by Boujee Bin.</p>
	
										<p>Boujee Bin reserves the right to refuse or cancel any person’s registration for this Site, remove any person from this Site and prohibit any person from using this Site for any reason whatsoever, and to limit or terminate your access to or use of the Site at any time without notice. Boujee Bin neither warrants nor represents that your use of the content available on this Site will not infringe rights of third parties not affiliated with Boujee Bin. Termination of your access or use will not waive or affect any other right or relief to which Boujee Bin may be entitled, at law or in equity.</p>
	
										<h2>Content You Submit:</h2>
										<p>You acknowledge that you are responsible for any content you may submit through the Site, including the legality, reliability, appropriateness, originality and copyright of any such content. You may not upload to, distribute or otherwise publish through this Site any content that:</p>
	
										<ul>
											<li>is confidential, proprietary, invasive of privacy or publicity rights, infringing on intellectual property rights, unlawful, harmful, threatening, false, fraudulent, libelous, defamatory, obscene, vulgar, profane, abusive, harassing, hateful, racially, ethnically or otherwise objectionable, including, but not limited to any content that encourages conduct that would constitute a criminal offense, violates the rights of any party or otherwise gives rise to civil liability or otherwise violates any applicable U.S. or foreign laws;</li>
											<li>may contain software viruses or malware;</li>
											<li>contains advertisements or solicitations of any kind, or other commercial content;</li>
											<li>is designed to impersonate others;</li>
											<li>contains personal information (such as messages that include phone numbers, Social Security numbers, payment card numbers, account numbers, addresses or employer references), except where we expressly ask you to provide such information;</li>
											<li>contains messages by non-spokesperson employees of Boujee Bin purporting to speak on behalf of Boujee Bin or containing confidential information or expressing opinions concerning Boujee Bin;</li>
											<li>contains messages that offer unauthorized downloads of any copyrighted, confidential or private information;</li>
											<li>contains multiple messages placed within individual folders by the same user restating the same point;</li>
											<li>contains chain letters of any kind; or</li>
											<li>contains identical (or substantially similar) messages to multiple recipients advertising any product or service, expressing a political or other similar message, or any other type of unsolicited commercial message; this prohibition includes but is not limited to (a) using the invitation functionality that may be available on the Site to send messages to people who do not know you or who are unlikely to recognize you as a known contact; (b) using the Site to connect to people who do not know you and then sending unsolicited promotional messages to those direct connections without their permission; or (c) sending messages to distribution lists, newsgroup aliases or group aliases.</li>
										</ul>
	
										<p>You may not use a false email address or other identifying information, impersonate any person or entity or otherwise mislead as to the origin of any content. Some features that may be available on this Site require registration. By registering, you agree to provide true, accurate, current and complete information about yourself.</p>
	
										<p>With respect to any content you submit, post, upload, publish or otherwise make available through the Site (other than personal information, which is handled in accordance with the Privacy Notice), you grant Boujee Bin a perpetual, irrevocable, non-terminable, worldwide, transferable, royalty-free and non-exclusive license to use, copy, distribute, publicly display, modify, create derivative works, and sublicense such content or any part of such content, in any media. Any such content will not be treated as confidential. You hereby represent, warrant and covenant that:  (i) any content you provide does not include anything (including, but not limited to, text, images, music or video) to which you do not have the full right to grant such a license to Boujee Bin; and (ii) Boujee Bin is free to exercise its rights to and/or implement your content if it so desires, without obtaining permission or license from any third party and without reference to you or any other person.</p>
	
										<h2>Links</h2>
										<p>This Site may contain links to other websites or resources that are operated by third parties not affiliated with Boujee Bin. These links are provided as a convenience to you and as an additional avenue of access to the information contained therein. We are not responsible or liable for any content, advertising, products or other materials on or available from such sites or resources. Inclusion of links to other sites or resources should not be viewed as an endorsement of the content of linked sites or resources. Different terms and conditions and privacy policies may apply to your use of any linked sites or resources. Boujee Bin is not responsible or liable, directly or indirectly, for any damage, loss or liability caused or alleged to be caused by or in connection with any use of or reliance on any such content, products or services available on or through any such linked site or resource.</p>
	
										<h2>Text Messages</h2>
										<p>If you provided us with your mobile phone number, you must have a text messaging-enabled mobile device with a text messaging plan in order to receive text messages from us. This service is free from Boujee Bin but charges from your carrier for text, data or other usage may apply and you are responsible for all such charges.</p>
	
										<h2>Disclaimers</h2>
										<p>EXCEPT AS OTHERWISE EXPRESSLY PROVIDED IN THESE TERMS OF USE OR THE TERMS OF SERVICE OR TERMS OF MEMBERSHIP, AND TO THE FULLEST EXTENT PERMISSIBLE BY APPLICABLE LAW, Boujee Bin MAKES NO REPRESENTATIONS, COVENANTS OR WARRANTIES AND OFFERS NO OTHER CONDITIONS, EXPRESS OR IMPLIED, REGARDING ANY MATTER, INCLUDING, WITHOUT LIMITATION, THE MERCHANTABILITY, SUITABILITY, FITNESS FOR A PARTICULAR USE OR PURPOSE, OR NON-INFRINGEMENT OF Boujee Bin MEMBERSHIP, ANY CONTENT ON THE SITES, OR ANY PRODUCTS OR SERVICES PURCHASED THROUGH THE Boujee Bin SITES, AS WELL AS WARRANTIES IMPLIED FROM A COURSE OF PERFORMANCE OR COURSE OF DEALING.</p>
	
										<p>YOUR USE OF THIS SITE IS AT YOUR SOLE RISK. THE SITE AND THE MATERIALS, INFORMATION, SERVICES AND PRODUCTS ON THIS SITE ARE PROVIDED ON AN “AS IS” AND “AS AVAILABLE” BASIS. WE RESERVE THE RIGHT TO RESTRICT OR TERMINATE YOUR ACCESS TO THE SITE OR ANY FEATURE OR PART THEREOF AT ANY TIME. Boujee Bin DISCLAIMS ANY WARRANTIES THAT ACCESS TO THE SITE WILL BE UNINTERRUPTED OR ERROR-FREE; THAT THE SITE WILL BE SECURE; THAT THE SITE OR THE SERVER THAT MAKES THE SITE AVAILABLE WILL BE VIRUS-FREE; OR THAT INFORMATION ON THE SITE WILL BE CORRECT, ACCURATE, ADEQUATE, USEFUL, TIMELY, RELIABLE OR OTHERWISE COMPLETE. IF YOU DOWNLOAD ANY CONTENT FROM THIS SITE, YOU DO SO AT YOUR OWN DISCRETION AND RISK. YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OF ANY SUCH CONTENT. NO ADVICE OR INFORMATION OBTAINED BY YOU FROM THE SITE SHALL CREATE ANY WARRANTY OF ANY KIND.</p>
	
										<p>IN CERTAIN JURISDICTIONS, THE LAW MAY NOT PERMIT THE DISCLAIMER OF WARRANTIES, SO THE ABOVE DISCLAIMER MAY NOT APPLY TO YOU.</p>
	
										<h2>Limitation of Liability</h2>
										<p>THE PROVIDERS WHOSE PRODUCTS AND SERVICES ARE AVAILABLE ON THE Boujee Bin SITES ARE INDEPENDENT CONTRACTORS AND NOT AGENTS OR EMPLOYEES OF Boujee Bin. Boujee Bin IS NOT LIABLE FOR THE ACTS, ERRORS, OMISSIONS, REPRESENTATIONS, WARRANTIES, BREACHES OR NEGLIGENCE OF ANY SUCH SERVICE PROVIDERS OR FOR ANY PERSONAL INJURIES, DEATH, PROPERTY DAMAGE, OR OTHER DAMAGES OR EXPENSES RESULTING THEREFROM.</p>
	
										<p>YOU ACKNOWLEDGE AND AGREE THAT YOU ASSUME FULL RESPONSIBILITY FOR YOUR USE OF THE SITE AND/OR FOR USE OF THE Boujee Bin MEMBERSHIP, COMMUNICATIONS WITH THIRD PARTIES, AND PURCHASE AND USE OF THE PRODUCTS AND SERVICES AVAILABLE THROUGH THE Boujee Bin SITES. YOU ACKNOWLEDGE AND AGREE THAT ANY INFORMATION YOU SEND OR RECEIVE DURING YOUR MEMBERSHIP AND/OR USE OF THE SITE MAY NOT BE SECURE AND MAY BE INTERCEPTED BY UNAUTHORIZED PARTIES. YOU ACKNOWLEDGE AND AGREE THAT YOUR USE OF THE SITE IS AT YOUR OWN RISK AND THAT THE SITE IS MADE AVAILABLE TO YOU AT NO CHARGE. RECOGNIZING SUCH, YOU ACKNOWLEDGE AND AGREE THAT, TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW (INCLUDING, WITHOUT LIMITATION, CONSUMER PROTECTION LAW), NEITHER Boujee Bin NOR ITS LICENSORS, SUPPLIERS OR THIRD PARTY CONTENT PROVIDERS (“Boujee Bin GROUPE”) WILL BE LIABLE FOR ANY DIRECT, INDIRECT, PUNITIVE, EXEMPLARY, INCIDENTAL, SPECIAL, CONSEQUENTIAL OR OTHER DAMAGES ARISING OUT OF OR IN ANY WAY RELATED TO (1) THIS SITE, OR ANY OTHER SITE OR RESOURCE YOU ACCESS THROUGH A LINK FROM THIS SITE; (2) ANY ACTION WE TAKE OR FAIL TO TAKE AS A RESULT OF COMMUNICATIONS YOU SEND TO US; (3) YOUR Boujee Bin MEMBERSHIP, ANY TERMINATION OR CANCELATION OF YOUR MEMBERSHIP, ANY REFERRAL CREDIT PROGRAM (OR ASSOCIATED CREDITS), ANY MERCHANDISE CREDITS OR RETURN REFUNDS ASSOCIATED WITH YOUR Boujee Bin MEMBERSHIP, IN EACH CASE AS MORE PARTICULARLY DESCRIBED IN YOUR TERMS OF MEMBERSHIP; (4) ANY PRODUCTS OR SERVICES MADE AVAILABLE OR PURCHASED THROUGH THE Boujee Bin SITES, INCLUDING ANY DAMAGES OR INJURY ARISING FROM ANY USE OF SUCH PRODUCTS OR SERVICES; (5) ANY DELAY OR INABILITY TO USE THE SITE OR ANY INFORMATION, PRODUCTS OR SERVICES ADVERTISED IN OR OBTAINED THROUGH THE SITE; (6) THE MODIFICATION, REMOVAL OR DELETION OF ANY CONTENT SUBMITTED OR POSTED ON THE SITE; OR (7) ANY USE OF THE SITE, WHETHER BASED ON CONTRACT, TORT, STRICT LIABILITY OR OTHERWISE, EVEN IF Boujee Bin GROUPE HAVE BEEN ADVISED OF THE POSSIBILITY OF DAMAGES. IT IS THE RESPONSIBILITY OF THE USER TO EVALUATE THE ACCURACY, COMPLETENESS OR USEFULNESS OF ANY OPINION, ADVICE OR OTHER CONTENT AVAILABLE THROUGH THE SITE, OR OBTAINED FROM A LINKED SITE OR RESOURCE. THIS DISCLAIMER APPLIES, WITHOUT LIMITATION, TO ANY DAMAGES OR INJURY ARISING FROM ANY FAILURE OF PERFORMANCE, ERROR, OMISSION, INTERRUPTION, DELETION, DEFECT, DELAY IN OPERATION OR TRANSMISSION, COMPUTER VIRUS, FILE CORRUPTION, COMMUNICATION-LINE FAILURE, NETWORK OR SYSTEM OUTAGE, LOSS OF PROFITS BY YOU, OR THEFT, DESTRUCTION, UNAUTHORIZED ACCESS TO, ALTERATION OF, LOSS OR USE OF ANY RECORD OR DATA, AND ANY OTHER TANGIBLE OR INTANGIBLE LOSS. YOU SPECIFICALLY ACKNOWLEDGE AND AGREE THAT NEITHER Boujee Bin NOR ITS LICENSORS, SUPPLIERS OR THIRD PARTY CONTENT PROVIDERS SHALL BE LIABLE FOR ANY DEFAMATORY, OFFENSIVE OR ILLEGAL CONDUCT OF ANY USER OF THE SITE. YOUR REMEDY FOR ANY OF THE ABOVE CLAIMS OR ANY DISPUTE WITH Boujee Bin IS TO DISCONTINUE YOUR USE OF THE SITE.</p>
	
										<p>YOU AND Boujee Bin AGREE THAT ANY CAUSE OF ACTION ARISING OUT OF OR RELATED TO THE SITE MUST COMMENCE WITHIN ONE (1) YEAR AFTER THE CAUSE OF ACTION ACCRUES OR THE CAUSE OF ACTION IS PERMANENTLY BARRED.  BECAUSE SOME JURISDICTIONS DO NOT ALLOW LIMITATIONS ON HOW LONG AN IMPLIED WARRANTY LASTS, OR THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, ALL OR A PORTION OF THE ABOVE LIMITATION MAY NOT APPLY TO YOU.</p>
	
										<h2>Indemnities</h2>
										<p>You will indemnify and hold harmless Boujee Bin, LLC from and against any and all fines, penalties, liabilities, losses and other damages of any kind whatsoever (including attorneys’ and experts’ fees), incurred by Boujee Bin, LLC and such parties, and shall defend Boujee Bin, LLC and such parties against any and all claims arising out of (1) your breach of these Terms of Use; (2) your breach of the Terms of Membership; (3) fraud you commit, or your intentional misconduct or gross negligence; or (4) your violation of any applicable U.S. or foreign law or the rights of a third party. Boujee Bin, LLC will control the defense of any claim to which this indemnity may apply, and in any event, you shall not settle any claim without the prior written approval of Boujee Bin, LLC.</p>
	
										<h2>Electronic Communications</h2>
										<p>When you use the Site or send emails to Boujee Bin, you are communicating with Boujee Bin electronically. You consent to receive electronically any communications related to your use of this Site. Boujee Bin will communicate with you by email or by posting notices on this Site. You agree that all agreements, notices, disclosures and other communications that are provided to you electronically satisfy any legal requirement that such communications be in writing. All notices from Boujee Bin intended for receipt by a customer shall be deemed delivered and effective when sent to the email address you provide on any of the Boujee Bin Sites.</p>
	
										<h2>Site Provided Emails and Postings</h2>
										<p>The Site may provide users with the ability to send email messages to other users and non-users and to post messages on the Site. Boujee Bin is under no obligation to review any content (including any messages) posted on or sent through the Site by users and assumes no responsibility or liability relating to any such content. Boujee Bin, in its sole discretion, may monitor, not post or remove any such content.</p>
	
										<h2>Access to Password Protected Features</h2>
										<p>Access to and use of password-protected areas of the Site is restricted to authorized users only. You are responsible for protecting your login credentials, including any password. You agree that you will be responsible for any and all statements made, and acts or omissions that occur, through the use of your login credentials. If you have any reason to believe or become aware of any loss, theft or unauthorized use of your login credentials, notify Boujee Bin immediately. Boujee Bin may assume that any communications we receive from your email or other address, or communications that are associated with your login credentials or your account on this Site, have been made by you unless we receive notice indicating otherwise.</p>
	
										<h2>Trademarks and Copyrights</h2>
										<p>The trademarks, logos and service marks (“Marks”) displayed on the Site are the property of Boujee Bin or its licensors or content providers, or other parties. Users or any parties acting on their behalf are prohibited from using any Marks for any purpose including, but not limited to use as meta tags on other pages or sites without the written permission of Boujee Bin or such third party which may own the Marks. You may not use frames or utilize framing techniques or technology to enclose any content included on the Site without Boujee Bin’s express written consent. Further, you may not utilize any Site content in any meta tags or any other “hidden text” techniques or technologies without Boujee Bin’s express written consent. All content (including any software programs) available on or through the Site is protected by copyright, trademark and other applicable U.S. and foreign laws.</p>
	
										<h2>Claims of Intellectual Property Infringement</h2>
										<p>Boujee Bin respects the intellectual property of others, and we ask our users to do the same. You are hereby informed that Boujee Bin has adopted and reasonably implemented a policy that provides for the termination in appropriate circumstances of website users or Boujee Bin members who are repeat copyright infringers. Boujee Bin may, in appropriate circumstances and at its discretion, disable and/or terminate the accounts and/or memberships of users who may be infringing the intellectual property of a third party. If you believe that your work has been copied in a way that constitutes copyright infringement, or your intellectual property rights have been otherwise violated, please provide Boujee Bin’s Copyright Agent the following information (to be effective, the notification must be in writing and provided to our Copyright Agent):</p>
	
										<ul>
											<li>an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright or other intellectual property interest;</li>
											<li>a description of the copyrighted work or other intellectual property that you claim has been infringed, or, if multiple copyrighted works at a single online site are covered by a single notification, a representative list of such works at that site;</li>
											<li>identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled, and a description of where the material that you claim is infringing is located on the Site;</li>
											<li>your address, telephone number, and, if available, email address;</li>
											<li>a statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law; and</li>
											<li>a statement by you, made under penalty of perjury, that the above information in your notice is accurate and that you are the copyright or intellectual property owner or authorized to act on the copyright or intellectual property owner’s behalf.</li>
										</ul>
	
										<p>Boujee Bin’s agent for notice of claims of copyright or other intellectual property infringement can be reached as follows:</p>
	
										<p>Mail to: Dan Novatnak<br><br>
										4000 Central Florida Blvd.<br><br>
										Orlando, FL 32801</p>
	
										<p>Boujee Bin may update this contact information from time to time without notice to you. We will post the current contact information on this Site.</p>
	
										<h2>Survival of the Terms After Agreement Ends</h2>
										<p>Notwithstanding any other provisions of these Terms of Use, or any general legal principles to the contrary, any provision of these Terms of Use that imposes or contemplates continuing obligations on a party will survive the expiration or termination of these Terms of Use.</p>
	
										<h2>Force Majeur</h2>
										<p>Boujee Bin shall be excused from performance under these Terms of Use or the Terms of Membership, to the extent it is prevented from or delayed from performing, in whole or in part, as a result of an event or series of events caused by or resulting from (1) weather conditions or other elements of nature or acts of God, (2) acts of war, acts of terrorism, insurrection, riots, civil disorders or rebellion, (3) quarantines or embargoes, (4) labor strikes, or (5) other causes beyond the reasonable control of Boujee Bin.</p>
	
										<h2>International Use</h2>
										<p>We make no representation that information available in connection with the Site is appropriate or available for use outside the United States. Those who choose to access the Site from outside the United States do so on their own initiative and risk and are responsible for compliance with local laws,if and to the extent local laws are applicable.</p>
	
										<h2>Risk of Loss</h2>
										<p>The items purchased through the Site are shipped by a third party carrier pursuant to a shipment contract. As a result, risk of loss and title for such items pass to you upon our delivery to the carrier.</p>
	
										<h2>Dispute Resolution</h2>
										<p>By using the Site in any way, you unconditionally consent and agree that: (1) any claim, dispute, or controversy (whether in contract, tort, or otherwise) you may have against Boujee Bin, or any of its officers, directors and employees, arising out of, relating to, or connected in any way with the Site or the determination of the scope or applicability of this agreement to arbitrate, will be resolved exclusively by final and binding arbitration administered by JAMS and conducted before a sole arbitrator in accordance with the rules of JAMS; (2) this arbitration agreement is made pursuant to a transaction involving interstate commerce, and shall be governed by the Federal Arbitration Act ("FAA"), 9 U.S.C. §§ 1-16; (3) the arbitration shall be held in New York, New York; (4) the arbitrator's decision shall be controlled by these Boujee Bin Terms of Use and any of the other agreements referenced herein that the applicable user may have entered into in connection with the Site; (5) the arbitrator shall apply New York law consistent with the FAA and applicable statutes of limitations, and shall honor claims of privilege recognized at law; (6) there shall be no authority for any claims to be arbitrated on a class or representative basis, arbitration can decide only your and/or the applicable Boujee Bin, or any of its officers', directors', and employees', individual claims; the arbitrator may not consolidate or join the claims of other persons or parties who may be similarly situated; (7) the arbitrator shall not have the power to award punitive damages against you or Boujee Bin, or any of its officers, directors, and employees; (8) in the event that the administrative fees and deposits that must be paid to initiate arbitration against Boujee Bin or any of its officers, directors and employees, exceed $125 USD, and you are unable (or not required under the rules of JAMS) to pay any fees and deposits that exceed this amount, Boujee Bin agrees to pay them and/or forward them on your behalf, subject to ultimate allocation by the arbitrator. In addition, if you are able to demonstrate that the costs of arbitration will be prohibitive as compared to the costs of litigation, Boujee Bin will pay as much of your filing and hearing fees in connection with the arbitration as the arbitrator deems necessary to prevent the arbitration from being cost-prohibitive; and (9) with the exception of subpart (6) above, if any part of this arbitration provision is deemed to be invalid, unenforceable or illegal, or otherwise conflicts with the rules of JAMS, then the balance of this Dispute Resolution provision shall remain in effect and shall be construed in accordance with its terms as if the invalid, unenforceable, illegal or conflicting provision were not contained herein. If, however, subpart (6) is found to be invalid, unenforceable or illegal, then the entirety of this Arbitration Provision shall be null and void, and neither you nor Boujee Bin shall be entitled to arbitrate their dispute. For more information on JAMS and/or the rules of JAMS, visit their website at www.jamsadr.com. THIS SECTION LIMITS CERTAIN RIGHTS, INCLUDING THE RIGHT TO MAINTAIN A COURT ACTION, THE RIGHT TO A JURY TRIAL, THE RIGHT TO PARTICIPATE IN ANY FORM OF CLASS OR REPRESENTATIVE CLAIM, THE RIGHT TO ENGAGE IN DISCOVERY EXCEPT AS PROVIDED IN JAMS RULES, AND THE RIGHT TO CERTAIN REMEDIES AND FORMS OF RELIEF. OTHER RIGHTS THAT YOU OR Boujee Bin WOULD HAVE IN COURT ALSO MAY NOT BE AVAILABLE IN ARBITRATION.</p>
	
										<h2>General</h2>
										<p>From time to time, Boujee Bin may offer special promotional offers that may or may not apply to your Boujee Bin account. You agree to be bound by any additional terms and conditions for these special offers.</p>
	
										<p>If any of the provisions set forth in these Terms of Use or the Terms of Membership are deemed invalid, void, or for any reason unenforceable, the parties agree that the court should endeavor to give effect to the parties’ intentions as reflected in the provision, and the unenforceable condition shall be deemed severable and shall not affect the validity and enforceability of any remaining provisions of these Terms of Use or the Terms of Membership. Section headings are for reference purposes only and do not limit the scope or extent of such section. These Terms of Use or the Terms of Membership and the relationship between you and Boujee Bin will be governed by the laws of the State of New York, to the extent not preempted by or inconsistent with federal law, without regard to its conflict of law provisions.  For any actions not subject to arbitration, we each agree to submit to the personal jurisdiction of a state court located in New York County, New York or the United States District Court for the Southern District of New York.</p>
	
										<p>The failure of Boujee Bin to act with respect to a breach of these Terms of Use or the Terms of Membership by you or others does not waive Boujee Bin’s right to act with respect to subsequent or similar breaches. If any content on this Site, or your use of the Site, is contrary to the laws of the place where you are when you access it, the Site is not intended for you, and we ask you not to use the Site. You are responsible for informing yourself of the laws of your jurisdiction and complying with them.</p>
	
										<p>Boujee Bin does not guarantee it will take action against all breaches of these Terms of Use or the Terms of Membership. Except as otherwise expressly provided in these Terms of Use or the Terms of Membership, there shall be no third-party beneficiaries to these Terms of Use or the Terms of Membership.</p>
	
										<h2>Changes to These Terms</h2>
										<p>You acknowledge and agree that Boujee Bin may, in its sole discretion, modify, add or remove any portion of these Terms of Use at any time and in any manner, by posting revised Terms of Use on the Site.  You may not amend or modify these Terms of Use under any circumstances. It is your responsibility to check periodically for any changes we make to the Terms of Use. Your continued use of this Site after any changes to the Terms of Use means you accept the changes.</p>
	
										<h2>Assignment</h2>
										<p>You may not assign these Terms of Use or the Terms of Membership (or any rights, benefits or obligations hereunder) by operation of law or otherwise without the prior written consent of Boujee Bin, which may be withheld at Boujee Bin’s sole discretion. Any attempted assignment that does not comply with these Terms of Use or the Terms of Membership shall be null and void. Boujee Bin may assign these Terms of Use or the Terms of Membership, in whole or in part, to any third party in its sole discretion.</p>
	
										<h2>Entire Agreement and Admissability</h2>
										<p>These Terms of Use constitute the entire agreement and understanding between you and Boujee Bin with respect to the subject matter thereof and supersede all prior or contemporaneous communications and proposals, whether oral or written, between the parties with respect to such subject matter. For the avoidance of doubt, these Terms of Use apply solely to the extent permitted by law.</p>
	
										<p>In some instances, both of these Terms of Use and a separate document that provides additional conditions may apply to a service or product offered via this Site (“Additional Terms”). To the extent there is a conflict between these Terms of Use and any Additional Terms, the Additional Terms will control unless the Additional Terms expressly state otherwise.</p>
	
										<p>A printed version of these Terms of Use shall be admissible in judicial or administrative proceedings based on or relating to use of this site to the same extent and subject to the same conditions as other business documents and records originally generated and maintained in printed form.</p>
	
										<h2>How to Contact Us</h2>
										<p>If you have any questions or comments about these Terms of Use or this Site, please contact us by email at legal@boujeebin.com.</p>
	
										<h2>Educational Purposes Only</h2>
										<p>This project has been built for educational purposes only and should not be marketed as an actual
	
										<p>Last Modified: November 8, 2018</p>
									<?php
								} else if ($_GET["policy"] == "privacy"){
									?>
										<h1 class="ui center aligned header">Privacy Policy</h1>
										<h6 class="ui center aligned header"><a href="agreements.php">Other Policies</a></h6>
										<h2>Privacy Notice</h2>
										<p>Last updated July 9, 2018
										Thank you for visiting our website for Boujee Bin, which is operated by Boujee Bin, LLC ("Boujee Bin"). We are committed to providing an exciting and safe online shopping experience and elevated level of personal service synonymous with Boujee Bin. This commitment includes respecting and protecting the privacy of your personal information.<br><br>
										This privacy policy describes the types of information we collect from and about you when you visit our website (each a "Site") or use our mobile applications (each an "App”). The Sites and Apps are collectively referred to as the "Services." This privacy policy also explains how Boujee Bin may use and share your personal information, as well as your ability to control certain uses of it.<br><br>
										By using the Services, you agree to the collection, use, and disclosure of your information as described in this privacy policy, including the transfer to and storage of your personal information in the United States, and agree to the Terms of Use which are incorporated by reference. If you do not agree, please do not access or use the Services.</p>
	
										<h2>What information does Boujee Bin collect?</h2>
										<p>Boujee Bin may collect information from or about you in a number of ways.  Please note that if you decline to provide any of the requested information (whether or not required), you may not be able to take full advantage of the Services and their features or make a purchase from us.
										From Boujee Bin's Interactions With You: We collect information from and about you and your transactions and other interactions with us. This may include when you use the Services, create an online account with us, make a purchase, sign up for our catalogue, newsletters or email lists, participate in sweepstakes, contests or other promotions, participate in a product review, survey, or other similar programs, send a gift or virtual gift card to a person, or otherwise contact us. The personal information we collect may include your name, address, email address, telephone number, or other contact information, loyalty program membership information, gender, birthday, age, other demographic information, your interests, and preferences.<br><br>
										If you make a purchase from us, we may also collect a credit or debit card number or other financial information, CVV, and billing address. In addition, if you make a purchase at a designer boutique, restaurant, salon or other similar service offered within a section of a Boujee Bin store that is leased by a third party (each a "Boutique Service"), we and the Boutique Service may collect information such as your name, billing address, shipping address, telephone number, email address and payment or gift card information, and their privacy policies govern their use of your information.
										If you download one of our Apps, it may be possible for the App to obtain your precise geolocation. If so, you may choose to permit the App to obtain such information. In this case, we will determine your zip code from the precise location data received from your mobile device. We do not store precise location data; we only store the zip code associated with the location.<br><br>
										Information You Provide About a Third Party: If you send someone else a communication from the Services (such as sending a gift or virtual gift card), we may collect information such as that person's name, telephone number, email, and/or shipping address.<br><br>
										Automatically on the Site or App: We, or our service providers, may use cookies, web beacons/pixel tags, log files, JavaScript, and other technologies to collect certain non-personal information about visitors to our Site or App, users of our online services, and interactions with our emails and online advertisements, and to allow Boujee Bin to keep track of analytics and certain statistical information. For example, we may collect information such as your browser type, operating system type or mobile device model, viewed webpages, links that are clicked, IP address mobile device identifier or other unique identifier, sites or apps visited before coming to our Site or App, the amount of time you spend viewing or using the Site or App, the number of times you return, or other click-stream or site usage data, emails we send that you open, forward, or click through to our Site or App. Collecting this information, and linking it with your personal information, helps us to tailor our Site or App and enhance your online shopping experience by saving your preferences while you are visiting a particular site, and to help identify Site or App features, promotions, advertisements, and offers that may be of particular interest to you and retarget online and mobile advertisements to you across computers or devices you may use.<br><br>
										From Third Party Sources: We may acquire information from other sources to update or supplement the information that you provide or that we collect automatically (such as information to validate or update your address or other demographic information), or when you connect with the company through a third party (including through social networks) based on your registration and privacy settings on those third party sites.<br><br>
										Combination of Information: We may combine the information we receive from or about you, including information you provide to us and information we automatically collect through the Site or App, as well as information across other computers or devices that you use, with information we collect or receive about you from other online and offline sources, or from other third party sources.<br><br>
										Third Party Analytics and Advertisements: We also may use third party advertisements, analytics, and tracking tools to better understand who is using the Site or App, how people are using the Site or App, how to improve the effectiveness of the Services and related content, and to help us or those third parties serve more targeted advertising to you across the Internet. These third parties may use technology such as cookies, web beacons, pixel tags, log files, flash cookies, or other technologies to collect and store non-personal information. They may also combine information they collect from your interaction with the Site or App with information they collect from other sources. We do not have access to, or control over, these third parties' use of cookies or other tracking technologies.</p>
	
										<h2>What are my tracking options?</h2>
										<p>Certain parts of the Site and App require cookies. By registering for and using the Services, you are consenting to the use of cookies. Because of the members-only nature of our Services, cookies are essential to the function of our websites and the provision of the Services. If you do not agree to the use of cookies, you cannot use the Services. The following is a description of the four categories of cookies and examples of how we use them to provide you the Services:</p>
	
										<ul>
											<li>Strictly Necessary Cookies – These cookies are essential to enabling you to browse and use the functionality of a website and without them the Services cannot be provided. We use these cookies, among other things, to recognize and maintain your logged-in status throughout your visit and manage your shopping cart.</li>
											<li>Performance Cookies – These cookies collect information about how visitors use the Services, for example, pages that they visit and if they receive error messages. This information does not identify you individually and is used in the aggregate to improve our Services.</li>
											<li>Functionality Cookies – These cookies allow us to remember certain choices you make about how you like to use the Services and provide you a more personalized experience, for example, your shipping country and currency preferences.</li>
											<li>Targeting Cookies – These cookies are used to deliver online advertisements that are relevant to you and your interests and to measure the effectiveness of advertising campaigns. They may be placed on the Services by us or by our advertising partners with our permission. For more on targeting cookies and your ability to control their use, please see below.</li>
										</ul>
	
										<p>Our system may not respond to Do Not Track requests or headers from some or all browsers. We may use cookies or other technologies to deliver more relevant advertising and to link data collected across other computers or devices that you may use. To understand your choices for receiving more relevant advertising or to manage your settings, please review the information below:<br><br>
										To learn more about managing your privacy and storage settings and opting out from receiving third party advertiser cookies, you may visit the Network Advertising Initiative's opt-out page at http://www.networkadvertising.org/managing/opt_out.asp and www.aboutads.info/choices and follow the instructions on how to opt out. For instructions on how to specifically opt out of Criteo advertising services, please view the Criteo Privacy Policy at www.criteo.com/us/privacy-policy.<br><br>
										If you wish to prevent your data from being used by Google Analytics, Google has developed the Google Analytics opt-out browser add-on available at https://tools.google.com/dlpage/gaoptout/. In addition, information about cookies, including how to refuse cookies, can be found at: www.allaboutcookies.org.  On your mobile device, you may also adjust your privacy and advertising settings to control whether you want to receive more relevant advertising.<br><br>
										We or our service providers may also use Flash cookies (also known as Local Stored Objects) or other similar technologies. A Flash cookie is a small data file placed on a computer using Adobe Flash or similar technology that may be built into your computer or downloaded or installed by you on your computer. We use these technologies to personalize and enhance your online experience, facilitate processes, and personalize and store your settings. Flash cookies may help our website visitors to, for example, set volume preference associated with a video experience, play games and perform surveys. They help us improve our websites by measuring which areas are of greatest interest to customers. They may be recognized by other websites or by our marketing or business partners. Flash cookies are different from browser cookies and the cookie management tools provided by your browser may not remove Flash cookies. To learn how to manage privacy and storage settings for Flash cookies, visit http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager.html. If you disable Flash cookies or other similar technologies, please be aware that you may not have access to certain features and services that make your online experience more efficient and enjoyable.</p>
	
										<h2>How does Boujee Bin use the information collected?</h2>
										<p>Boujee Bin may use the information we collect from and about you for any of the following purposes:</p>
	
										<ul>
											<li>To validate, confirm, verify, deliver, install, and track your order (including to process payment card transactions, arrange for shipping, handle returns and refunds, maintain a record of the purchases you make, and contact you about your orders, including by telephone) or to service products you purchased from us.</li>
											<li>To enhance your online shopping experience, including as a way to recognize you and welcome you to the Site or App.</li>
											<li>To send you catalogs, information, newsletters, promotional materials and other offerings from Boujee Bin or on behalf of our partners and affiliates.</li>
											<li>To provide you with customized Site or App content, targeted offers, promotions and advertising on the Site or App, through other third party sites or apps, or via email, text messages, or App push notifications that are offered by Boujee Bin or other marketing partners that might be of interest to you.</li>
											<li>To improve our sites, products/services, customer service, and customer shopping experience.</li>
											<li>To use your data in an aggregated non-specific format for analytical and demographic purposes.</li>
											<li>To protect the security or integrity of the Site and our business, such as by protecting against and preventing fraud, unauthorized transactions, claims and other liabilities, and managing risk exposure, including by identifying potential hackers and other unauthorized users.</li>
											<li>To contact you when necessary or requested, including responding to your questions and comments and providing customer support.</li>
											<li>As otherwise described to you at the point of data collection.</li>
										</ul>
	
										<h2>What information does Boujee Bin share with others?</h2>
										<p>Boujee Bin may share personal information we collect from and about you in the following ways:
										Boujee Bin, LLC:  We may share collected information within, Boujee Bin LLC's affiliated companies, and any future additions to Boujee Bin, LLC’s family of affiliated companies.<br><br>
										Co-Marketing Partners: Certain areas of the Services may be provided to you in association with third parties, such as companies that provide products and services, rewards programs, conduct joint sales programs, sweepstakes, promotional campaigns, and other jointly sponsored events. Such Services will identify the third party. If you elect to register for any products and/or services provided during the Services, you either will be providing your information to both Boujee Bin and such third party, or Boujee Bin might share your information directly with such third party for that third party to fulfill their products and our products and services directly with you.<br><br>
										Other Third Parties: Boujee Bin may share your information with select partners, affiliates, and other third parties that we believe may have offers or be of interest to you.
										Legal Disclosures; Safety: Boujee Bin may transfer and/or disclose the information we receive from and about you to comply with a legal obligation; to provide information to law enforcement and other governmental authorities in accordance with applicable law, and when we believe in good faith that the law requires it. We also reserve the right to share information with legal authorities and other companies for fraud protection and credit risk reduction, to detect any technical or security vulnerabilities, to enforce our Terms of Use or other applicable policies, or to otherwise protect the rights, property, safety, or security of third parties, users of the Services, Boujee Bin, or the public.<br><br>
										Sale of Business: During the normal course of our business, we may sell or purchase assets. If another entity acquires all or a part of Boujee Bin, LLC or its family of affiliated companies, information we have collected about you may be transferred to such entity. In addition, if any bankruptcy or reorganization proceeding is brought by or against Boujee Bin, LLC or its family of affiliated companies, such information may be considered an asset of such company and may be sold or transferred to third parties. Should a sale or transfer occur, we will use reasonable efforts to try to require that the transferee use personally identifiable information provided through the Services in a manner that is consistent with this Privacy Policy.<br><br>
										Service Providers: We use third-party service providers to perform certain services on our behalf when the information is necessary for them to perform their duties. These third-party service providers are prohibited from using personal information for any other purpose and are contractually required to comply with all applicable laws and requirements, which may include Payment Card Industry Data Security Standards if they are processing payments for Boujee Bin.<br><br>
										Aggregate or Anonymous Non-Personal Information: We may also share or sell non-identifiable aggregate or anonymous information with our affiliates, agents, service providers, business partners, or other third parties for their marketing or analytics uses or for other lawful purposes. This type of non-identifiable and aggregate information cannot be used to identify you personally.</p>
	
										<h2>How can I view, update or remove my information?</h2>
										<p>If you have registered for an account or made a purchase, you may view and update your account information by logging into the "Your Account" section of the Site or App with your email address and password. Once logged in, you can view or update your name, address, telephone number or email address. You can also contact our Customer Service Department via email at customerservice@boujeebin.com to access or update any of this information.<br><br>
										You may also exercise your rights, subject to applicable laws, to request that we delete or restrict access to your personal data. We may need to retain data for legally permitted purposes and this will be explained to you if necessary.</p>
	
										<h2>What choices do I have about receiving communications from Boujee Bin?</h2>
										<p>If you register for an account or make a purchase, you will automatically receive promotional emails and direct mail from Boujee Bin. We provide our customers with the opportunity to "opt out" of having their information used for purposes not directly related to placement, processing, fulfillment or delivery of a product order. We provide you with the following options if you prefer to "opt out" of receiving information or materials that we think may be of interest to you:<br><br>
										Electronic Promotional Offers: At all times, you have the option of "opting out" of receiving promotional emails from the sender only by clicking the "unsubscribe" link in any of the promotional emails you receive. In addition, if you have an online account, you may change your email preferences regarding email from us by logging into the "Your Account" section of the Site or App.<br><br>
										Direct Mail Promotional Offers: If you would like to be removed from our Boujee Bin catalog mailing list, please contact a Customer Service representative by email to stop receiving paper catalogs.<br><br>
										Push Notifications: When you use the App, you may receive push notifications. If you prefer not to receive push notifications, you may adjust your settings on your mobile device to control whether you want to receive these alerts.<br><br>
										App Geolocation Information: When you use the App on your mobile device, you may choose not to share your geolocation information with us by adjusting the device's location service settings.<br><br>
										Other Contact: In all cases, you may email us at customerservice@boujeebin.com or privacy@boujeebin.com.</p>
	
										<h2>What are my California Privacy Rights?</h2>
										<p>If you are a California resident, you may request information about our disclosure of personal information to third parties or affiliated companies for their direct marketing purposes. To make such request, please submit a written request to the following email address specifying that you want a copy of Boujee Bin's "California Privacy Rights" notice: privacy@boujeebin.com. Please include "Attn: California Privacy" in the subject line. We are not responsible for notices that are not labeled or sent properly, or do not have complete information. Please allow up to 30 days for us to process your request. You may submit such a request once per year.<br><br>
										Non-affiliated third parties are independent from Boujee Bin and if you wish to receive information about your disclosure choices or stop communications from such third parties, you will need to contact those non-affiliated third parties directly.</p>
	
										<h2>What about children's privacy?</h2>
										<p>Protecting children's privacy is important to us, and the Site and App are not intended for children under the age of thirteen. We do not direct the Site or App to, nor do we knowingly collect any personal information from, such children. If you are not 18 or older, you are not authorized to use the Services. If Boujee Bin learns that a child under the age of thirteen has provided personally identifiable information to the Site or App, it will use reasonable efforts to remove such information from its files. Parents should be aware that there are parental control tools available online that you can use to prevent your children from submitting information online without parental permission or from accessing material that is harmful to minors.</p>
	
										<h2>What about security?</h2>
										<p>We have taken certain physical, administrative, and technical steps to safeguard the information we collect from and about our customers and Site visitors. While we make every effort to help ensure the integrity and security of our network and systems, we cannot guarantee our security measures. When you enter sensitive information (such as credit card information) on our forms, we encrypt the transmission of that information using secure socket layer technology (SSL).</p>
	
										<h2>What about other websites?</h2>
										<p>Our Site or App  may include links to third-party websites or apps that are not affiliated with Boujee Bin. These websites or apps may send their own cookies to visitors, collect data or solicit your information. The privacy policies of these other websites or apps may be very different from our policy. We are not responsible for the privacy practices of these other websites or apps and cannot guarantee the security of any personal information you provide to or collected by such third party sites or apps.</p>
	
										<h2>For how long and where is my data stored?</h2>
										<p>Your personal information may be stored for as long as is reasonably necessary to perform the purposes listed under "How does Boujee Bin use the information collected?", as necessary for our legitimate business purposes, or as required or authorized by law.  Personal information that is no longer required to fulfill the identified purposes will be destroyed, erased or made de-identified or anonymous.<br><br>
										Your personal information is subject to the laws of the United States. The servers and databases in which information may be stored may be located outside the country from which you accessed the Services and in a country where the data protection and other laws may differ from your country of residence. Your personal information may be disclosed in response to inquiries or requests from government authorities or to respond to judicial process in the countries in which we operate. You consent to any such cross-border transfer of your personal information.</p>
	
										<h2>What if I live outside of the United States?</h2>
										<p>Our digital operations are conducted, in whole or in part, in the United States, and are subject to U.S. laws, including those governing privacy and data security, and we will protect your information as described in this Privacy Policy. Regardless of where you live, you consent to have your personal data transferred, processed and stored outside of the country where you are located, including in the United States, and allow Boujee Bin to use and collect your personal information in accordance with this Privacy Policy.  Certain countries may not have the same data protection laws as the country in which you are located and such information may be available to government authorities under lawful orders and as applicable in such foreign jurisdictions.  You consent to any such cross-border transfer of your personal information.</p>
	
										<h2>How does Boujee Bin communicate changes to this policy?</h2>
										<p>Any changes to our Privacy Policy will be posted here so that you will always know what information we gather, how we might use that information and whether we may disclose it to anyone. Your continued use of the Site or App following posting of changes to these terms will mean you accept these changes.</p>
	
										<h2>Who do I contact if I have additional questions or concerns about this policy? How do I lodge a complaint?</h2>
										<p>We welcome you to reach out if you have any questions or concerns regarding our privacy practices. Please feel free to contact Customer Service via email at customerservice@boujeebin.com. We are transparent about the ways in which we collect and use personal information and welcome your questions and concerns. If you have any concern or complaint about the way we handle your personal information, please contact us at legal@boujeebin.com. To the extent you believe we have not addressed your concerns or otherwise choose to do so, you have the right to lodge a complaint with a supervisory authority in the country where you reside and/or the United States. You may contact the US Federal Trade Commission regarding your concerns. <br><br><br><br>For more information, please see https://www.ftc.gov/faq/consumer-protection/submit-consumer-complaint-ftc.  For all questions about unsubscribing, contact customerservice@boujeebin.com. For privacy related questions, contact legal@boujeebin.com.</p>
									<?php
								} else if ($_GET["policy"] == "return"){
									?>
										<h1 class="ui center aligned header">Return Policy</h1>
										<h6 class="ui center aligned header"><a href="agreements.php">Other Policies</a></h6>
										<h2>Returnable Items</h2>
										<p>Returnable items can be returned within 14 days of receipt of order. Returns are only available by mail. When shipping a return by mail, please follow these guidelines:</p>
	
										<ul>
											<li>Items must be returned unused, unworn, unwashed and undamaged.<li>
											<li>Return items in their original packaging with all tags attached. Packaging may include hangers, plastic wrap, boxes, warranty cards, accessories and dust bags.<li>
											<li>Each item must be returned to a specific location. Please ensure only the items listed on your return label are included in the return package.<li>
										</ul>
	
										<h2>Non-Returnable Items</h2>
										<p>Non-returnable items are listed as final sale. Final sale items are not eligible for return and will not appear in your eligible items for return. We let you know when an item is final sale by noting it in the item’s description and it may also be noted on your packing slip.<br><br>
										Items such as underwear and socks are non-returnable.</p>
	
										<h2>Extended Holiday Returns</h2>
										<p>Items purchased now through December 15 can be returned through January 15.</p>
	
										<h2>Refund Option</h2>
										<p>We offer two refund options for returnable merchandise:</p>
										<ol>
											<li>You can select to return for merchandise credit and enjoy free return shipping. (Note: Air-shipping rates apply for Alaska and Hawaii.)</li>
											<li>You can select to return for a refund to original form of payment and pay a 15% restocking fee.</li>
										</ol>
									<?php
								} else if ($_GET["policy"] == "shipping"){
									?>
										<h1 class="ui center aligned header">Shipping Policy</h1>
										<h6 class="ui center aligned header"><a href="agreements.php">Other Policies</a></h6>
										<p>Boujee Bin is not responsible for lost or damaged packages. Merchandise can be exchanged or returned at your local Boujee Bin or by processing a request online. For more information, please review our <a href="agreements.php?policy=return">Return Policy</a>.<br><br>Shipping fees are determined by the weight and size of the item(s) ordered at checkout. Fees will vary contingent on these factors. Shipping fees may also change based on the sole discretion of the shipping providers: USPS, FedEx or UPS.</p>
									<?php
								};
							};
						?>					
					</div>
				</div>
			</div>
		</div>

		<div id="footer-style" class="ui container fluid footer-style">
			<footer class="ui container basic segment">
				<?php include('includes/footer.html'); ?>
			</footer>
		</div>
	</body><!--end body-->
</html>